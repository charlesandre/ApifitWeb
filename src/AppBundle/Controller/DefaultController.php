<?php
namespace AppBundle\Controller;


use AppBundle\Entity\UsersSearch;
use AppBundle\Entity\UsersFriends;
use AppBundle\Entity\UsersChat;
use AppBundle\Entity\UsersPosts;
use AppBundle\Form\Search;
use AppBundle\Form\Post;
use AppBundle\Form\Chat;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DefaultController extends Controller
{
  /**
  * @Route("/", name="welcome")
  */
  public function showAction(Request $request)
  {

    if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      return $this->redirect($this->generateUrl('register'));
    }

    $a=$this->getUser()->getId();
    /* GETTING ALL NOTIFICATIONS */
      /* GET NEW MESSAGES */
      $repositoryMessages = $this->getDoctrine()
      ->getRepository('AppBundle:UsersChat');

      $queryMessages= $repositoryMessages->createQueryBuilder('m')
      ->where('m.uid2 = :uid')
      ->andwhere('m.vu = 0')
      ->setParameter('uid', $a)
      ->getQuery();
      $unreadmessages = $queryMessages->getResult();

      /* GET NEW POSTS */
      $repositoryPosts = $this->getDoctrine()
      ->getRepository('AppBundle:UsersPosts');

      $queryPosts= $repositoryPosts->createQueryBuilder('p')
      ->where('p.uid2 = :uid')
      ->andwhere('p.uid1 != :uid')
      ->andwhere('p.vu = 0')
      ->setParameter('uid', $a)
      ->getQuery();
      $unreadposts = $queryPosts->getResult();

      /* GET NEW FRIEND REQUESTS */
    $repositoryFriend = $this->getDoctrine()
    ->getRepository('AppBundle:UsersFriends');

    $queryFriendDemand = $repositoryFriend->createQueryBuilder('f')
    ->where('f.uid2 = :uid')
    ->andwhere('f.statut = 0')
    ->setParameter('uid', $a)
    ->getQuery();
    $frienddemands = $queryFriendDemand->getResult();

    /* CREATING SEARCH FORM */

    $Search = new UsersSearch();

    $formsearch = $this->createForm(Search::class, $Search);
    $formsearch->handleRequest($request);

    /* GET USERS' DATA */

    $repository = $this->getDoctrine()
    ->getRepository('AppBundle:UsersData');

    $repositoryUsers = $this->getDoctrine()
    ->getRepository('AppBundle:User');

    $query = $repository->createQueryBuilder('d')
    ->where('d.id = :uid')
    ->setParameter('uid', $a)
    ->orderBy('d.date', 'DESC')
    ->setMaxResults(1)
    ->getQuery();

    $lastdata = $query->getResult();

    $query = $repository->createQueryBuilder('d')
    ->where('d.id = :uid')
    ->setParameter('uid', $a)
    ->getQuery();

    $queryUsers = $repositoryUsers->createQueryBuilder('u')
    ->where('u.id = :uid')
    ->setParameter('uid', $a)
    ->getQuery();

    $users = $queryUsers->getResult();

    $repositoryUsers = $this->getDoctrine()
    ->getRepository('AppBundle:User');

    $em = $this->getDoctrine()->getManager();
    $connection = $em->getConnection();
    $statement = $connection->prepare("SELECT U.ID as id, U.Name as name, U.lastname as lastname FROM user U, users_friends F WHERE (F.uid1 = :id AND U.ID = F.uid2) OR ( F.uid2 = :id AND U.ID = F.uid1 ) AND STATUT = 1 ");
    $statement->bindValue('id', $a);
    $statement->execute();
    $friends = $statement->fetchAll();



    /* IF THERE IS A NEW SEARCH */
    if ($formsearch->isSubmitted() && $formsearch->isValid()) {

      /* CREATING SEARCH FORM */

      $Search = new UsersSearch();

      $formsearch = $this->createForm(Search::class, $Search);
      $formsearch->handleRequest($request);

      $keyword= $formsearch["search"]->getData();

      $Search->setUid($a);
      $Search->setSearch($keyword);

      $em = $this->getDoctrine()->getManager();
      $em->persist($Search);
      $em->flush();

      $queryusers = $repositoryUsers->createQueryBuilder('u')
      ->where('u.lastname = :key')
      ->orWhere('u.name = :key')
      ->setParameter('key', $keyword)
      ->getQuery();

      $resultusers=$queryusers->getResult();

      return $this->render('default/result.html.twig',array(
        'formsearch' => $formsearch->createView(),
        'users' => $resultusers,
        'key' => $keyword
      ));

    }




    return $this->render('default/index.html.twig', array(
      'formsearch' => $formsearch->createView(),
      'demands' => $frienddemands,
      'newmessages' => $unreadmessages,
      'newposts' => $unreadposts,
      'friends' => $friends,
      'lastdata' => $lastdata,
      'id'=> $a,
      'users' => $users
    ));
  }




/* SEE A USER'S PROFIL */

  /**
 * @Route("/profil/{uid}")
 */
  public function displayUser(Request $request){
      $id = $request->attributes->get('uid');
      $a=$this->getUser()->getId();


      /* MARK ALL THE POSTS AS READ IF THE USERS GOES ON HIS OWN PROFIL */

      if($id == $a){
      $em = $this->getDoctrine()->getManager();
      $connectionRead = $em->getConnection();
      $statementRead = $connectionRead->prepare("UPDATE USERS_POSTS P SET P.VU = '1' WHERE P.UID2 = :id");
      $statementRead->bindValue('id', $a);
      $statementRead->execute();
    }

    /* MARK ALL THE MESSAGES AS READ */

      $em = $this->getDoctrine()->getManager();
      $connectionRead = $em->getConnection();
      $statementRead = $connectionRead->prepare("UPDATE USERS_CHAT P SET P.VU = '1' WHERE P.UID2 = :id");
      $statementRead->bindValue('id', $a);
      $statementRead->execute();


      /* GET USER'S DATA */
    $repositoryUsers = $this->getDoctrine()
    ->getRepository('AppBundle:User');

    $queryUsers = $repositoryUsers->createQueryBuilder('u')
    ->where('u.id = :uid')
    ->setParameter('uid', $id)
    ->getQuery();
    $users = $queryUsers->getResult();

    /* GET MESSAGES THAT HAVE BEEN SENT */
    $repositoryChat = $this->getDoctrine()
    ->getRepository('AppBundle:UsersChat');

    $em = $this->getDoctrine()->getManager();
    $connectionChat = $em->getConnection();
    $statementChat = $connectionChat->prepare("SELECT C.* FROM users_chat C WHERE (C.uid1 = :id1 AND C.uid2 = :id2) OR (C.uid1 = :id2 AND C.uid2 = :id1)");
    $statementChat->bindValue('id1', $a);
    $statementChat->bindValue('id2', $id);
    $statementChat->execute();
    $messages = $statementChat->fetchAll();

    /* CREATING FORM TO SEND A MESSAGE */
    $Chat = new UsersChat();

     $formchat = $this->createForm(Chat::class, $Chat);
     $formchat->handleRequest($request);


     /* IF THERE IS A NEW MESSAGE SENT */
     if ($formchat->isSubmitted() && $formchat->isValid()) {

       $content= $formchat["content"]->getData();

       $Chat->setUid1($a);
       $Chat->setUid2($id);
       $Chat->setVU('0');
       $Chat->setContent($content);

       $em = $this->getDoctrine()->getManager();
       $em->persist($Chat);
       $em->flush();

       return $this->redirect("/profil/$id");

     }

     /* IF THE USERS ARE ALREADY FRIENDS OR IF AN IVITE HAS BEEN SENT */
     $em = $this->getDoctrine()->getManager();
     $connectionFriend = $em->getConnection();
     $statementFriend = $connectionFriend->prepare("SELECT F.* FROM users_friends F WHERE (F.uid1 = :id1 AND F.uid2 = :id2) OR (F.uid1 = :id2 AND F.uid2 = :id1)");
     $statementFriend->bindValue('id1', $a);
     $statementFriend->bindValue('id2', $id);
     $statementFriend->execute();
     $isfriend = $statementFriend->fetchAll();

     /* GET ALL THE POSTS ON HIS WALL */

     $em = $this->getDoctrine()->getManager();
     $connectionPost = $em->getConnection();
     $statementPost = $connectionPost->prepare("SELECT DISTINCT P.ID as id, U.NAME as name, U.LASTNAME as lastname, P.CONTENT as content, P.IMG as img FROM USER U, USERS_POSTS P WHERE (P.UID2 = :id AND P.UID1 = U.ID) ORDER BY P.ID DESC");
     $statementPost->bindValue('id', $id);
     $statementPost->execute();
     $posts = $statementPost->fetchAll();


     /* FORM TO ADD A NEW POST */
     $Post = new UsersPosts();

      $formpost = $this->createForm(Post::class, $Post);
      $formpost->handleRequest($request);

      /* IF THE USER POSTS SOMETHING */
      if ($formpost->isSubmitted() && $formpost->isValid()) {

        $content= $formpost["content"]->getData();

        $Post->setUid1($a);
        $Post ->setUid2($id);
        $Post->setContent($content);
        if($a != $id){
        $Post->SetVu('0');
        }
        else{
          $Post->setVu('1');
        }
        // $img = $formpost["src"]->getData
        // if($img)
        // {
        //
        // }
        // else{
          // $Post->setImg('0');

        // }
        $em = $this->getDoctrine()->getManager();
        $em->persist($Post);
        $em->flush();


        // $dir = "images/Posts";
        // $img = $formpost["src"]->getData->move($dir, $someNewFilename);


        return $this->redirect("/profil/$id");

      }
      /* CREATING SEARCH FORM */

      $Search = new UsersSearch();

      $formsearch = $this->createForm(Search::class, $Search);
      $formsearch->handleRequest($request);


          /* IF THERE IS A NEW SEARCH */
          if ($formsearch->isSubmitted() && $formsearch->isValid()) {

            /* CREATING SEARCH FORM */

            $Search = new UsersSearch();

            $formsearch = $this->createForm(Search::class, $Search);
            $formsearch->handleRequest($request);

            $keyword= $formsearch["search"]->getData();

            $Search->setUid($a);
            $Search->setSearch($keyword);

            $em = $this->getDoctrine()->getManager();
            $em->persist($Search);
            $em->flush();

            $queryusers = $repositoryUsers->createQueryBuilder('u')
            ->where('u.lastname = :key')
            ->orWhere('u.name = :key')
            ->setParameter('key', $keyword)
            ->getQuery();

            $resultusers=$queryusers->getResult();

            return $this->render('default/result.html.twig',array(
              'formsearch' => $formsearch->createView(),
              'users' => $resultusers,
              'key' => $keyword
            ));

          }


    return $this->render('default/profil.html.twig', array(
      'user' => $users,
       'posts' => $posts,
      'isfriend' => $isfriend,
      'formsearch' => $formsearch->createView(),
       'formchat' => $formchat->createView(),
       'formpost' => $formpost->createView(),
       'messages' => $messages
    ));
  }

/* ADD A FRIEND */

  /**
 * @Route("/profil/{uid1}/{uid2}/{n}")
 */
  public function AddFriend(Request $request){
      $id1 = $request->attributes->get('uid1');
      $id2 = $request->attributes->get('uid2');
      $n = $request->attributes->get('n');

      /* IF IT'S A NEW REQUEST OF FRIENDSHIP */
      if($n==-1){
        $relation = new UsersFriends();
        $relation->setUid1($id2);
        $relation->setUid2($id1);
        $relation->setStatut(0);

        $em = $this->getDoctrine()->getManager();
        $em->persist($relation);
        $em->flush();


      $repositoryUsers = $this->getDoctrine()
      ->getRepository('AppBundle:User');

      $queryUsers = $repositoryUsers->createQueryBuilder('u')
      ->where('u.id = :uid')
      ->setParameter('uid', $id1)
      ->getQuery();

      $users = $queryUsers->getResult();
    }

    /* IF THE USER WANTS TO ACCEPT AN INVITATION */

    else{
      $em = $this->getDoctrine()->getManager();
      $connectionRequest = $em->getConnection();
      $statementRequest = $connectionRequest->prepare("UPDATE users_friends F SET F.STATUT= 1 WHERE F.UID_REL = :idrel ");
      $statementRequest->bindValue('idrel', $n);
      $statementRequest->execute();
    }

    return $this->redirect("/profil/$id1");
  }


}
