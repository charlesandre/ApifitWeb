<?php
namespace AppBundle\Controller;


use AppBundle\Entity\UsersSearch;
use AppBundle\Entity\UsersFriends;
use AppBundle\Form\Search;
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

    /* IS THERE ANY NEW FRIEND RELATION WAITING */
    $repositoryFriend = $this->getDoctrine()
    ->getRepository('AppBundle:UsersFriends');

    $queryFriendDemand = $repositoryFriend->createQueryBuilder('f')
    ->where('f.uid2 = :uid')
    ->andwhere('f.statut = 0')
    ->setParameter('uid', $a)
    ->getQuery();
    $frienddemands = $queryFriendDemand->getResult();


    $Search = new UsersSearch();

    $formsearch = $this->createForm(Search::class, $Search);
    $formsearch->handleRequest($request);


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




    return $this->render('default/index.html.twig', array(
      'formsearch' => $formsearch->createView(),
      'demands' => $frienddemands,
      'friends' => $friends,
      'lastdata' => $lastdata,
      'id'=> $a,
      'users' => $users
    ));
  }

  /**
 * @Route("/profil/{uid}")
 */
  public function displayUser(Request $request){
      $id = $request->attributes->get('uid');

    $repositoryUsers = $this->getDoctrine()
    ->getRepository('AppBundle:User');

    $queryUsers = $repositoryUsers->createQueryBuilder('u')
    ->where('u.id = :uid')
    ->setParameter('uid', $id)
    ->getQuery();
    $users = $queryUsers->getResult();


    return $this->render('default/profil.html.twig', array(
      'user' => $users
    ));
  }

/* ADD A FRIEND */

  /**
 * @Route("/profil/{uid1}/{uid2}")
 */
  public function AddFriend(Request $request){
      $id1 = $request->attributes->get('uid1');
      $id2 = $request->attributes->get('uid2');

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

    return $this->redirect("/profil/$id1");
  }


}
