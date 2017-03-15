<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use djchen\OAuth2\Client\Provider\Fitbit;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\UsersSearch;
use AppBundle\Entity\User;
use AppBundle\Form\PP;
use AppBundle\Form\UpdateInfo;
use AppBundle\Form\Search;




class ConfigureUserController extends Controller
{

  /**
  * @Route("/configure", name = "configure")
  */
  public function showAction(Request $request)
  {
    $a=$this->getUser()->getId();
    $repositoryUsers = $this->getDoctrine()
    ->getRepository('AppBundle:User');

    /* GETTING ALL NOTIFICATIONS */
      /* GET NEW MESSAGES */
      $em = $this->getDoctrine()->getManager();
      $connectionMessage = $em->getConnection();
      $statementMessage = $connectionMessage->prepare("SELECT U.ID as id ,U.NAME as name, U.LASTNAME as lastname, M.CONTENT as content FROM USERS_CHAT M, USER U WHERE M.UID2 = :id AND M.UID1 = U.ID AND M.VU = '0'");
      $statementMessage->bindValue('id', $a);
      $statementMessage->execute();
      $unreadmessages = $statementMessage->fetchAll();
      $MessageCount = count($unreadmessages);


      /* GET NEW POSTS */
      $em = $this->getDoctrine()->getManager();
      $connectionPosts = $em->getConnection();
      $statementPosts = $connectionPosts->prepare("SELECT U.NAME as name, U.LASTNAME as lastname, P.CONTENT as content FROM USERS_POSTS P, USER U WHERE P.UID2 = :id AND P.UID1 != P.UID2 AND P.UID1 = U.ID AND P.VU = '0'");
      $statementPosts->bindValue('id', $a);
      $statementPosts->execute();
      $unreadposts = $statementPosts->fetchAll();
      $PostCount = count($unreadposts);


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

    /* IF THERE IS A NEW SEARCH */
    if ($formsearch->isSubmitted() ) {

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

    /* CREATE FORM TO CHANGE PP */
    $PP = new User();

    $formpp = $this->createForm(PP::class, $PP);
    $formpp->handleRequest($request);

    /* IF THERE IS A NEW PP */
    if ($formpp->isSubmitted() && $formpp->isValid()) {

         $dir = "images/Avatar";
         $someNewFilename = "$a.png";
          $img = $formpp["src"]->getData()->move($dir, $someNewFilename);
    }


    /* FORM FOR OTHER INFO */
    $Update = new User();


    /* IF THIS FORM IS SUBMITTED */
    if ($formsearch->isSubmitted() && $formsearch->isValid()) {



    }
    $formupdate = $this->createForm(UpdateInfo::class, $Update);
    $formupdate->handleRequest($request);

    return $this->render('default/configure.html.twig', array(
      'formsearch' => $formsearch->createView(),
      'formpp' => $formpp->createView(),
      'newmessages' => $unreadmessages,
      'numnewmessage' => $MessageCount,
      'numnewposts' => $PostCount,
      'newposts' => $unreadposts,
      'formupdate' => $formupdate->createView(),
      'current_api' => $this->getUser()->getApi()
    ));
  }


  /**
  * @Route("/configure/jawbone", name = "jawbone")
  */
  public function getJawboneAPI(Request $request){

    $em = $this->getDoctrine()->getManager();
    $this->getUser()->setApi('jawbone');
    $em->flush();

    return ConfigureUserController::showAction($request);
  }


  /**
  * @Route("/configure/fitbit", name = "fitbit")
  */
  public function getFitbitAPI(Request $request){

    /*  $em = $this->getDoctrine()->getManager();
    $this->getUser()->setApi('fitbit');
    */

    $provider = new Fitbit([
      'clientId'          => '227YW8',
      'clientSecret'      => 'b9d07a7b54e355979df0d2b2574f7d7e',
      'redirectUri'       => ''
    ]);

    if (!isset($_GET['code'])) {

      $authorizationUrl = $provider->getAuthorizationUrl();
      $_SESSION['oauth2state'] = $provider->getState();

      header('Location: ' . $authorizationUrl);
      exit;

    } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
      unset($_SESSION['oauth2state']);
      exit('Invalid state');

    } else {

      try {

        $accessToken = $provider->getAccessToken('authorization_code', [
          'code' => $_GET['code']
        ]);

        $resourceOwner = $provider->getResourceOwner($accessToken)->toArray();

        /*    $usr_id = $this->getUser()->getId();

        $current_data = $this->getDoctrine()->getRepository('AppBundle:UsersData')->find($usr_id);

        foreach ($resourceOwner as $key => $value)
        {
        $method = 'set'.ucfirst($key);

        if (method_exists($current_data, $method))
        {
        $current_data->$method($value);
      }
    }

    $em->persist($current_data);
    $em->flush();*/


    $request = $provider->getAuthenticatedRequest(
      Fitbit::METHOD_GET,
      Fitbit::BASE_FITBIT_API_URL . '/1/user/-/profile.json',
      $accessToken,
      ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
    );

    //        $response = $provider->getParsedResponse($request);

  } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
    exit($e->getMessage());
  }
  return $this->render('default/fitbitdata.html.twig', array(
    'datas' =>  $resourceOwner,
  ));
}
}

  /**
  * @Route("/configure/acceptFitbit", name = "acceptFitbit")
  */
  public function acceptFitbitApi(Request $request){

    $resourceOwner = $request->request->get('data');

    $em = $this->getDoctrine()->getManager();
    $this->getUser()->setApi('fitbit');
    $usr_id = $this->getUser()->getId();

    $current_data = $this->getDoctrine()->getRepository('AppBundle:UsersData')->find($usr_id);

    foreach ($resourceOwner as $key => $value)
    {
      $method = 'set'.ucfirst($key);

      if (method_exists($current_data, $method))
      {
        $current_data->$method($value);
      }
    }

    $em->persist($current_data);
    $em->flush();

    return new Response (
      '<p> Check :'.$resourceOwner. '</p>'
    );

  }



}
