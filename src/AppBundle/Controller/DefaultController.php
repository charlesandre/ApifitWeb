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


    public function menuAction(Request $request){
      $Search = new UsersSearch();

      $formsearch = $this->createForm(Search::class, $Search);
      $formsearch->handleRequest($request);
      $a = $this->getUser()->getId();

      // GET NEW MESSAGES
      $em = $this->getDoctrine()->getManager();
      $connectionMessage = $em->getConnection();
      $statementMessage = $connectionMessage->prepare("SELECT U.ID as id ,U.NAME as name, U.LASTNAME as lastname, M.CONTENT as content FROM USERS_CHAT M, USER U WHERE M.UID2 = :id AND M.UID1 = U.ID AND M.VU = '0'");
      $statementMessage->bindValue('id', $a);
      $statementMessage->execute();
      $unreadmessages = $statementMessage->fetchAll();

      $MessageCount = count($unreadmessages);

      //GET NEW REQUEST
      $em = $this->getDoctrine()->getManager();
      $connectionRequest = $em->getConnection();
      $statementRequest = $connectionRequest->prepare("SELECT f.uid1 as id1, f.uid2 as id2, f.uid_rel as uidRel, u.name as name, u.lastname as lastname FROM users_friends f, user u WHERE f.uid2=:id AND f.statut = 0 AND f.uid1 = u.id ");
      $statementRequest->bindValue('id', $a);
      $statementRequest->execute();
      $unreadRequest = $statementRequest->fetchAll();

      $RequestCount = count($unreadRequest);

      //GET NEW NOTIFICATIONS
      $em = $this->getDoctrine()->getManager();
      $connectionPosts = $em->getConnection();
      $statementPosts = $connectionPosts->prepare("SELECT p.uid1 as id1, p.content as content, u.name as name, u.lastname as lastname FROM users_posts p, user u WHERE p.uid2 = :id AND p.vu = 0 AND p.uid1 = u.id");
      $statementPosts->bindValue('id', $a);
      $statementPosts->execute();
      $unreadPosts = $statementPosts->fetchAll();

      $PostsCount = count($unreadPosts);


      /* IF THERE IS A NEW SEARCH */
      if ($formsearch->isSubmitted()) {
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
          'users' => $resultusers,
          'key' => $keyword
        ));

      }

      return $this->render('navbars.html.twig', array(
        'formsearch' => $formsearch->createView(),
        'numnewmessage' => $MessageCount,
        'newmessages' => $unreadmessages,
        'numrequest' => $RequestCount,
        'request' => $unreadRequest,
        'newposts' => $unreadPosts,
        'numposts' => $PostsCount,
      ));
    }

  /**
  * @Route("/", name="welcome")
  */
  public function showAction(Request $request)
  {

    if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      return $this->redirect($this->generateUrl('register'));
    }
    $a=$this->getUser()->getId();

    /* GET USERS' DATA */
    $repository = $this->getDoctrine()
    ->getRepository('AppBundle:User');
    $repositoryUsers = $this->getDoctrine()
    ->getRepository('AppBundle:User');
    $query = $repository->createQueryBuilder('d')
    ->where('d.id = :id')
    ->setParameter('id', $a)
    ->setMaxResults(1)
    ->getQuery();
    $lastdata = $query->getResult();
    $query = $repository->createQueryBuilder('d')
    ->where('d.id = :uid')
    ->setParameter('uid', $a)
    ->getQuery();
    $lastdatamultiple = $query->getResult();
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

    /* GET 5 LAST DEFIS */
    $em = $this->getDoctrine()->getManager();
    $connectionDefis = $em->getConnection();
    $statementDefis = $connectionDefis->prepare("SELECT DISTINCT u.statut as statut, d.nom as nom, d.type as type, d.description as description FROM defis d, users_defis u WHERE u.did = d.id");
    $statementDefis->bindValue('id', $a);
    $statementDefis->execute();
    $defis = $statementDefis->fetchAll();

    /* GET 5 LAST EXERCICES */
    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("SELECT r.statut as statut, s.nom as nom, t.id as id, t.nom as nomexo, t.sport as sport, t.level as level, t.time as time, t.description as description FROM training t, sports s, users_training r WHERE s.id = t.sport AND r.tid = t.id");
    $statementExercices->execute();
    $exercices = $statementExercices->fetchAll();



    /* RECUPERATION DES DONNEES POUR LE GRAPHE Dashboard*/
    $em = $this->getDoctrine()->getManager();
    $connectionData = $em->getConnection();
    $statementData = $connectionData->prepare("SELECT DISTINCT s.steps as value, s.date as date FROM users_jawbone_moves s WHERE s.id = $a ORDER BY s.date ASC LIMIT 5");
    $statementData->execute();
    $steps = $statementData->fetchAll();

    $em = $this->getDoctrine()->getManager();
    $connectionData = $em->getConnection();
    $statementData = $connectionData->prepare("SELECT DISTINCT s.distance as value, s.date as date FROM users_jawbone_moves s WHERE s.id = $a ORDER BY s.date ASC LIMIT 5");
    $statementData->execute();
    $distance = $statementData->fetchAll();




    $accounts = $this->getDoctrine()->getRepository('AppBundle:UsersAccounts')->findByUid($this->getUser()->getId());

    return $this->render('default/index.html.twig', array(
      'friends' => $friends,
      'lastdata' => $lastdata,
      'lastdatamultiple' => $lastdatamultiple,
      'id'=> $a,
      'users' => $users,
      'defis' => $defis,
      'steps' => $steps,
      'distance' => $distance,
      'exercices' => $exercices,
      'accounts' => $accounts
    ));
  }


  /*  AFFICHAGE DES DEFIS   */
  /**
  * @Route("/defis")
  */
  public function DisplayDefis(Request $request){
    $a=$this->getUser()->getId();


    /* GET ALL DEFIS */
    $em = $this->getDoctrine()->getManager();
    $connectionDefis = $em->getConnection();
    $statementDefis = $connectionDefis->prepare("SELECT DISTINCT s.nom as nom, d.id as id, d.nom as nomdefi, d.level as level, d.type as type, d.time as time, d.description as description FROM defis d, sports s WHERE d.sport = s.id ORDER BY ID ASC");
    $statementDefis->bindValue('id', $a);
    $statementDefis->execute();
    $defis = $statementDefis->fetchAll();

    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("SELECT d.did as did FROM users_defis d WHERE d.uid = :id");
    $statementExercices->bindValue('id', $a);
    $statementExercices->execute();
    $abonementexercices = $statementExercices->fetchAll();

    return $this->render('default/defis.html.twig', array(
      'defis' => $defis,
      'abonnementexo' => $abonementexercices,
    ));
  }

  /**
  * @Route("/defis/{did}")
  */
  public function AddDefi(Request $request){
    $did = $request->attributes->get('did');
    $a=$this->getUser()->getId();

    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("SELECT * FROM users_defis WHERE uid = :id AND did = :deid");
    $statementExercices->bindValue('id', $a);
    $statementExercices->bindValue('deid', $did);
    $statementExercices->execute();
    $linkexist = $statementExercices->fetchAll();

    $exist = count($linkexist);

    if($exist == 0){

    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("INSERT INTO users_defis(uid, did, statut) VALUES(:id, :did, '0')");
    $statementExercices->bindValue('id', $a);
    $statementExercices->bindValue('did', $did);
    $statementExercices->execute();

  }
  else if ($exist == 1){
    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("DELETE FROM users_defis WHERE did = :deid AND uid = :id");
    $statementExercices->bindValue('id', $a);
    $statementExercices->bindValue('deid', $did);
    $statementExercices->execute();

  }

    return $this->redirect("/defis");


  }



  /*  AFFICHAGE DES ENTRAINEMENTS   */
  /**
  * @Route("/entrainements")
  */
  public function DisplayTrainings(Request $request){
    $a=$this->getUser()->getId();

    /* GET ALL EXERCICES */
    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("SELECT s.nom as nom, t.id as id, t.nom as nomexo, t.sport as sport, t.level as level, t.time as time, t.description as description FROM training t, sports s WHERE s.id = t.sport");
    $statementExercices->execute();
    $exercices = $statementExercices->fetchAll();

    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("SELECT t.tid as tid FROM users_training t WHERE t.uid = :id");
    $statementExercices->bindValue('id', $a);
    $statementExercices->execute();
    $abonementexercices = $statementExercices->fetchAll();

    return $this->render('default/entrainements.html.twig', array(
      'exercices' => $exercices,
      'abonnementexo' => $abonementexercices,

    ));
  }

  /**
  * @Route("/entrainements/{tid}")
  */
  public function AddTraining(Request $request){
    $tid = $request->attributes->get('tid');
    $a=$this->getUser()->getId();

    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("SELECT * FROM users_training WHERE uid = :id AND tid = :trid");
    $statementExercices->bindValue('id', $a);
    $statementExercices->bindValue('trid', $tid);
    $statementExercices->execute();
    $linkexist = $statementExercices->fetchAll();

    $exist = count($linkexist);

    if($exist == 0){

    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("INSERT INTO users_training(uid, tid, statut) VALUES(:id, :tid, '0')");
    $statementExercices->bindValue('id', $a);
    $statementExercices->bindValue('tid', $tid);
    $statementExercices->execute();

  }
  else if ($exist == 1){
    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("DELETE FROM users_training WHERE tid = :trid AND uid = :id");
    $statementExercices->bindValue('id', $a);
    $statementExercices->bindValue('trid', $tid);
    $statementExercices->execute();

  }

    return $this->redirect("/entrainements");


  }

  /*  AFFICHAGE DE LA LOC  */
  /**
  * @Route("/localisation")
  */
  public function DisplayLoc(Request $request){
    return $this->render('default/localisation.html.twig', array(

    ));

  }


  /**
  * @Route("/friends")
  */
  public function DisplayFriends(Request $request){

    $a = $this->getUser()->getId();


    $em = $this->getDoctrine()->getManager();
    $connection = $em->getConnection();
    $statement = $connection->prepare("SELECT U.ID as id, U.Name as name, U.lastname as lastname, U.level as level FROM user U, users_friends F WHERE (F.uid1 = :id AND U.ID = F.uid2) OR ( F.uid2 = :id AND U.ID = F.uid1 ) AND STATUT = 1 ");
    $statement->bindValue('id', $a);
    $statement->execute();
    $friends = $statement->fetchAll();


    return $this->render('default/friends.html.twig', array(
     'friends' => $friends
    ));
  }

}
