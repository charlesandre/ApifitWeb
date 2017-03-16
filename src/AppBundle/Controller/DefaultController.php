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

    /* GET USERS' DATA */
    $repository = $this->getDoctrine()
    ->getRepository('AppBundle:UsersData');
    $repositoryUsers = $this->getDoctrine()
    ->getRepository('AppBundle:User');
    $query = $repository->createQueryBuilder('d')
    ->where('d.uid = :uid')
    ->setParameter('uid', $a)
    ->orderBy('d.date', 'DESC')
    ->setMaxResults(1)
    ->getQuery();
    $lastdata = $query->getResult();
    $query = $repository->createQueryBuilder('d')
    ->where('d.uid = :uid')
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
    /* IF THERE IS A NEW SEARCH */

    return $this->render('default/index.html.twig', array(
      'friends' => $friends,
      'lastdata' => $lastdata,
      'lastdatamultiple' => $lastdatamultiple,
      'id'=> $a,
      'users' => $users
    ));
  }

  /*  AFFICHAGE DES DEFIS   */
  /**
  * @Route("/defis")
  */
  public function DisplayDefis(Request $request){
    $a=$this->getUser()->getId();

    /* GET ALL SPORTS */
    $em = $this->getDoctrine()->getManager();
    $connectionSports = $em->getConnection();
    $statementSports = $connectionSports->prepare("SELECT * FROM sports");
    $statementSports->bindValue('id', $a);
    $statementSports->execute();
    $sports = $statementSports->fetchAll();
    /* GET ALL DEFIS */
    $em = $this->getDoctrine()->getManager();
    $connectionDefis = $em->getConnection();
    $statementDefis = $connectionDefis->prepare("SELECT DISTINCT * FROM users_defi d, sports s WHERE d.sport = s.id");
    $statementDefis->bindValue('id', $a);
    $statementDefis->execute();
    $defis = $statementDefis->fetchAll();
    return $this->render('default/defis.html.twig', array(
      'sports' => $sports,
      'defis' => $defis,
    ));
  }



  /*  AFFICHAGE DES BADGES   */
  /**
  * @Route("/badges")
  */
  public function DisplayBadges(Request $request){
    $a=$this->getUser()->getId();

    /* GET ALL EXERCICES */
    $em = $this->getDoctrine()->getManager();
    $connectionExercices = $em->getConnection();
    $statementExercices = $connectionExercices->prepare("SELECT s.nom as nom, t.nom as nomexo, t.sport as sport, t.level as level, t.time as time, t.description as description FROM table_training t, sports s WHERE s.id = t.sport");
    $statementExercices->execute();
    $exercices = $statementExercices->fetchAll();
    return $this->render('default/badges.html.twig', array(
      'exercices' => $exercices,
    ));
  }



  /**
  * @Route("/", name="navbars")
  */
  public function menuAction(Request $request){
    $Search = new UsersSearch();

    $formsearch = $this->createForm(Search::class, $Search);
    $formsearch->handleRequest($request);
    $a = $this->getUser()->getId();


    $em = $this->getDoctrine()->getManager();
    $connectionMessage = $em->getConnection();
    $statementMessage = $connectionMessage->prepare("SELECT U.ID as id ,U.NAME as name, U.LASTNAME as lastname, M.CONTENT as content FROM USERS_CHAT M, USER U WHERE M.UID2 = :id AND M.UID1 = U.ID AND M.VU = '0'");
    $statementMessage->bindValue('id', $a);
    $statementMessage->execute();
    $unreadmessages = $statementMessage->fetchAll();

    $MessageCount = count($unreadmessages);


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
        'users' => $resultusers,
        'key' => $keyword
      ));

    }

    return $this->render('navbars.html.twig', array(
      'formsearch' => $formsearch->createView(),
      'numnewmessage' => $MessageCount,
      'newmessages' =>   $unreadmessages,
    ));
  }



}
