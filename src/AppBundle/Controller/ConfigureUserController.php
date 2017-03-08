<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use djchen\OAuth2\Client\Provider\Fitbit;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Security\Http\Firewall\ListenerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;


class ConfigureUserController extends Controller
{

  /**
  * @Route("/configure", name = "configure")
  */
  public function showAction(Request $request)
  {
    $progress=self::progressBar();

    if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      return $this->redirect($this->generateUrl('register'));
    }

    return $this->render('config/configure.html.twig', array(
      'current_api' => $this->getUser()->getApi(),
      'progress' => $progress,
    ));

  }


  public function progressBar(){
    $progress = 0;
    $api_data = $this->getDoctrine()->getRepository('AppBundle:UsersData')->find($this->getUser()->getId());
    $sports_choose = $this->getDoctrine()->getRepository('AppBundle:UsersSports')->find($this->getUser()->getId());
  /*  if(null !== ($sports_choose->getFootball() || $sports_choose->getRunning() || $sports_choose->getNatation() || $sports_choose->getRugby() || $sports_choose->getTennis()))
    {
      $progress+=20 ;
    }*/
    //$difficulte_choose = ;

    // check difficulté
    if($api_data && null !== $api_data->getDate()){
        $progress+=20 ;
    }



    //if sports remplis
    //if difficulté rempli

    return $progress;
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

    $em = $this->getDoctrine()->getManager();
    $this->getUser()->setApi('fitbit');


    $provider = new Fitbit([
      'clientId'          => '227YW8',
      'clientSecret'      => 'b9d07a7b54e355979df0d2b2574f7d7e',
      'redirectUri'       => 'http://www.apifit.fr/configure/fitbit'
    ]);


    if (!isset($_GET['code'])) {

      $authorizationUrl = $provider->getAuthorizationUrl();
      $_SESSION['oauth2state'] = $provider->getState();

      header('Location: ' . $authorizationUrl);
      exit;

     }elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
      unset($_SESSION['oauth2state']);
      exit('Invalid state');

     }else {

      try {

        $accessToken = $provider->getAccessToken('authorization_code', [
          'code' => $_GET['code']
        ]);

        $resourceOwner = $provider->getResourceOwner($accessToken)->toArray();
        $current_data = $this->getDoctrine()->getRepository('AppBundle:UsersData')->find($this->getUser()->getId());

        foreach ($resourceOwner as $key => $value)
        {
          $method = 'set'.ucfirst($key);

          if (method_exists($current_data, $method))
          {
            $current_data->$method($value);
          }
        }
        $date = new \DateTime(date_default_timezone_get());
        $current_data->setDate($date);


        $em->persist($current_data);
        $em->flush();

      } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        exit($e->getMessage());
      }
      return $this->render('config/fitbitdata.html.twig', array(
        'datas' =>  $resourceOwner,
      ));
    }
  }

  /**
  * @Route("/configure/sports", name = "sports")
  */
  public function setSports(Request $request){
    $progress=self::progressBar();
    $em = $this->getDoctrine()->getManager();
    $current_data = $this->getDoctrine()->getRepository('AppBundle:UsersSports')->find($this->getUser()->getId());

    return $this->render('config/sports.html.twig', array(
          'already_checked' => $current_data,
          'progress' => $progress,
    ));
  }

  /**
  * @Route("/configure/checksports", name = "configureSports")
  */
  public function configureSports(Request $request){

    $em = $this->getDoctrine()->getManager();
    $current_data = $this->getDoctrine()->getRepository('AppBundle:UsersSports')->find($this->getUser()->getId());


    if($request->request->has('Football')){
      $current_data->setFootball(1);
    }
    if($request->request->has('Natation')){
      $current_data->setNatation(1);
    }
    if($request->request->has('Running')){
      $current_data->setRunning(1);
    }
    if($request->request->has('Rugby')){
      $current_data->setRugby(1);
    }
    if($request->request->has('Tennis')){
      $current_data->setTennis(1);
    }

    $em->persist($current_data);
    $em->flush();

    return self::setObjectifs($request);

  }


  /**
  * @Route("/configure/objectifs", name = "objectifs")
  */
  public function setObjectifs(Request $request){

    $progress=self::progressBar();

   /*
    $provider = new Fitbit([
       'clientId'          => '227YW8',
       'clientSecret'      => 'b9d07a7b54e355979df0d2b2574f7d7e',
       'redirectUri'       => 'http://www.apifit.fr/configure/fitbit'
    ]);

    $existingAccessToken = getAccessTokenFromYourDataStore();

    if ($existingAccessToken->hasExpired()) {
        $newAccessToken = $provider->getAccessToken('refresh_token', [
            'refresh_token' => $existingAccessToken->getRefreshToken()
        ]);

        // Purge old access token and store new access token to your data store.
    }

    $request = $provider->getAuthenticatedRequest(
      Fitbit::METHOD_GET,
      Fitbit::BASE_FITBIT_API_URL . '/1/user/-/activities/date/2017-03-03.json',
      $accessToken,
      ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
    );

    $response = $provider->getResponse($request);
    */

    return $this->render('config/objectifs.html.twig',array(
      /*'response' => $response,*/
      'progress' => $progress,
    ));
  }


}
