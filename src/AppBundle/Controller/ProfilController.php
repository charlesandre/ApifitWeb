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



class ProfilController extends Controller
{

  /**
  * @Route("profil/{uid1}/{uid2}/{n}/{accept}")
  */
  public function AddFriend(Request $request){
    $id1 = $request->attributes->get('uid1');
    $id2 = $request->attributes->get('uid2');
    $n = $request->attributes->get('n');
    $accept = $request->attributes->get('accept');

if($accept == 1){
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
  else if ($accept==0){
    $em = $this->getDoctrine()->getManager();
    $connectionRequest = $em->getConnection();
    $statementRequest = $connectionRequest->prepare("UPDATE users_friends F SET F.STATUT= -1 WHERE F.UID_REL = :idrel ");
    $statementRequest->bindValue('idrel', $n);
    $statementRequest->execute();

    return $this->redirect("/");


  }
  }

  /**
  * @Route("/profil")
  */
  public function Redirecttomyprofil(Request $request){
    $a = $this->getUser()->getId();
    return $this->redirect("profil/$a");
  }



  /* SEE A USER'S PROFIL */

  /**
  * @Route("/profil/{id}", requirements={"id": "\d+"})
  */
  public function displayUser(Request $request, $id){
    $id = $request->attributes->get('id');

    /* GET USER'S DATA */
    $repositoryUsers = $this->getDoctrine()
    ->getRepository('AppBundle:User');

    $queryUsers = $repositoryUsers->createQueryBuilder('u')
    ->where('u.id = :uid')
    ->setParameter('uid', $id)
    ->getQuery();
    $users = $queryUsers->getResult();
    $idisvalid = count($users);

    if($idisvalid == 1) {

      $a=$this->getUser()->getId();

      /* GET NEW FRIEND REQUESTS */
      $repositoryFriend = $this->getDoctrine()
      ->getRepository('AppBundle:UsersFriends');

      $queryFriendDemand = $repositoryFriend->createQueryBuilder('f')
      ->where('f.uid2 = :uid')
      ->andwhere('f.statut = 0')
      ->setParameter('uid', $a)
      ->getQuery();
      $frienddemands = $queryFriendDemand->getResult();


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
        return $this->redirect("/$id");

      }


      return $this->render('default/profil.html.twig', array(
        'user' => $users,
        'posts' => $posts,
        'isfriend' => $isfriend,
        'formchat' => $formchat->createView(),
        'formpost' => $formpost->createView(),
        'messages' => $messages
      ));
    }
    else {
      return $this->redirect("/");
    }
  }



}
