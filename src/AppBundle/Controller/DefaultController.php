<?php
namespace AppBundle\Controller;

/*
use AppBundle\Entity\UsersSearch;
use AppBundle\Form\Search;
*/
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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


    /*
    $Search = new UsersSearch();

    $formsearch = $this->createForm(Search::class, $Search);
    $formsearch->handleRequest($request);
    */

    $repository = $this->getDoctrine()
    ->getRepository('AppBundle:UsersData');

    $a=$this->getUser()->getId();
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


    $repositoryUsers = $this->getDoctrine()
    ->getRepository('AppBundle:User');

    $em = $this->getDoctrine()->getManager();
    $connection = $em->getConnection();
    $statement = $connection->prepare("SELECT U.ID as id, U.Name as name, U.lastname as lastname FROM user U, users_friends F WHERE (F.uid1 = :id AND U.ID = F.uid2) OR ( F.uid2 = :id AND U.ID = F.uid1 ) ");
    $statement->bindValue('id', $a);
    $statement->execute();
    $friends = $statement->fetchAll();


/*
    if ($formsearch->isSubmitted() && $formsearch->isValid()) {
      $keyword= $formsearch["search"]->getData();
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
    */



    return $this->render('default/index.html.twig', array(
      //'formsearch' => $formsearch->createView(),
      'friends' => $friends,
      'lastdata' => $lastdata,
      'id'=> $a
    ));
  }

  /**
  * @Route("/search", name="search")
  */
  public function searchresult(Request $request){
    return $this->render('default/result.html.twig');
  }
}
