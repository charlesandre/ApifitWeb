<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use djchen\OAuth2\Client\Provider\Fitbit;
use Symfony\Component\HttpFoundation\Response;


class ConfigureUserController extends Controller
{

  /**
  * @Route("/configure", name = "configure")
  */
  public function showAction(Request $request)
  {
    return $this->render('default/configure.html.twig', array(
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
