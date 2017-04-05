<?php
namespace AppBundle\Controller;

use AppBundle\Entity\UsersAccounts;
use AppBundle\Entity\UsersFitbitCalories;
use AppBundle\Entity\UsersFitbitDistances;
use AppBundle\Entity\UsersFitbitCaloriesBmr;
use AppBundle\Entity\UsersFitbitHeartrate;
use AppBundle\Entity\UsersFitbitSteps;
use AppBundle\Entity\UsersFitbitWeight;


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


class FitbitDataController extends Controller
{

  /**
  * @Route("/configure/fitbit", name = "fitbit")
  */
  public function getFitbitAPI(Request $request){


    $provider = new Fitbit([
      'clientId'          => '227YW8',
      'clientSecret'      => 'b9d07a7b54e355979df0d2b2574f7d7e',
      'redirectUri'       => 'https://www.apifit.fr/configure/fitbit'
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

        $base_date = date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "-1 month" ) );

        $request_activities = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL . '/1/user/-/activities/date/2017-03-03.json',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
      );

        $request_calories = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL . '/1/user/-/activities/tracker/calories/date/today/1m.json',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
      );


        $request_calories_bmr = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL . '/1/user/-/activities/caloriesBMR/date/today/1m.json',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
      );

        $request_distances = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL . '/1/user/-/activities/distance/date/today/1m.json',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
      );

        $request_tracker_calories = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL . '/1/user/-/activities/tracker/calories/date/today/1m.json',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
        );


        $request_tracker_steps = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL .  '/1/user/-/activities/tracker/steps/date/today/1m.json',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
        );


        $request_heart = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL . '/1/user/-/activities/heart/date/today/1m.json',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
        );


        $request_devices = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL . '/1/user/-/devices.json',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
        );


        $request_friends = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL . '/1/user/-/friends.json',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
        );


      /*  $request_weight = $provider->getAuthenticatedRequest(
        Fitbit::METHOD_GET,
        Fitbit::BASE_FITBIT_API_URL . '/1/user/-/sleep/date/t',
        $accessToken,
        ['headers' => [Fitbit::HEADER_ACCEPT_LANG => 'en_US'], [Fitbit::HEADER_ACCEPT_LOCALE => 'en_US']]
        );
*/

        $response_activities = $provider->getResponse($request_activities);
        $response_friends = $provider->getResponse($request_friends);
        $response_devices = $provider->getResponse($request_devices);
        $response_heart = $provider->getResponse($request_heart);
        $response_tracker_steps = $provider->getResponse($request_tracker_steps);
        $response_tracker_calories = $provider->getResponse($request_tracker_calories);
        $response_distance = $provider->getResponse($request_distances);
        $response_calories_bmr = $provider->getResponse($request_calories_bmr);
        $response_calories = $provider->getResponse($request_calories);
  //      $response_weight = $provider->getResponse($request_weight);

        $em = $this->getDoctrine()->getManager();

        if(!self::checkExist('fitbit', $resourceOwner['encodedId'])) {
          $account = new UsersAccounts();
          $account->setUid($this->getUser()->getId());
          $account->setApiId($resourceOwner['encodedId']);
          $account->setNameAccount($resourceOwner['fullName']);
          $account->setBrand('fitbit');

          $em->persist($account);
          $em->flush();
        }
        else {
          return new Response("Compte déjà utilisé par un utilisateur d'Apifit. Désolé.");
        }

        $u =  $this->getDoctrine()->getRepository('AppBundle:User')->find($this->getUser()->getId());
        $u->setWeight($resourceOwner['weight']);
        $u->setHeight($resourceOwner['height']);
        $u->setGender($resourceOwner['gender']);
        $u->setDateOfBirth(new \DateTime($resourceOwner['dateOfBirth']));
        $em->persist($u);



        foreach($response_tracker_calories['activities-tracker-calories'] as $c)
        {
          $calories = new UsersFitbitCalories();
          $date = new \DateTime($c['dateTime']);

          $calories->setId($this->getUser()->getId());
          $calories->setValue($c['value']);
          $calories->setDate($date);
          $calories->setAid($account->getAid());

          $em->persist($calories);
        }


        foreach($response_weight['weightLog'] as $w)
        {
          $weight = new UsersFitbitWeight();
          $date = new \DateTime($c['dateTime']);

          $weight->setId($this->getUser()->getId());
          $weight->setBmi($w['bmi']);
          $weight->setDate($date);
          $weight->setTime($w['time']);
          $weight->setWeight($w['weight']);
          $weight->setAid($account->getAid());

          $em->persist($weight);
        }





        foreach($response_heart['activities-heart'] as $c)
        {
          $date = new \DateTime($c['dateTime']);
          $resting = $c['restingHeartRate'];

          foreach($c['value']['heartRateZones'] as $v){

            $h = new UsersFitbitHeartrate();

            $h->setId($this->getUser()->getId());
            $h->setCaloriesOut($v['caloriesOut']);
            $h->setMax($v['max']);
            $h->setMin($v['min']);
            $h->setMinutes($v['minutes']);
            $h->setName($v['name']);
            $h->setDate($date);
            $h->setRestingHeartRate($resting);
            $h->setAid($account->getAid());

            $em->persist($h);
          }
        }



        foreach($response_tracker_steps['activities-tracker-steps'] as $s)
        {
          $steps = new UsersFitbitSteps();
          $date = new \DateTime($s['dateTime']);

          $steps->setId($this->getUser()->getId());
          $steps->setValue($s['value']);
          $steps->setDate($date);
          $steps->setAid($account->getAid());

          $em->persist($steps);
        }


        foreach($response_calories_bmr['activities-caloriesBMR'] as $cbmr)
        {
          $caloriesbmr = new UsersFitbitCaloriesBmr();
          $date = new \DateTime($cbmr['dateTime']);

          $caloriesbmr->setId($this->getUser()->getId());
          $caloriesbmr->setDate($date);
          $caloriesbmr->setValue($cbmr['value']);
          $caloriesbmr->setAid($account->getAid());

          $em->persist($caloriesbmr);
        }

        foreach($response_distance['activities-distance']  as $d)
        {
          $distances = new UsersFitbitDistances();
          $date = new \DateTime($d['dateTime']);

          $distances->setId($this->getUser()->getId());
          $distances->setDate($date);
          $distances->setValue($d['value']);
          $distances->setAid($account->getAid());

          $em->persist($distances);
        }


      $em->flush();

      $progress = self::progressBar();

      } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        exit($e->getMessage());
      }

      return $this->render('config/fitbitdata.html.twig', array(
        'datas' =>  $resourceOwner,
        'progress' => $progress,
        'response_activities' => $response_activities,
        'response_calories' => $response_calories,
        'response_calories_bmr' => $response_calories_bmr,
        'response_tracker_calories' => $response_tracker_calories,
        'response_tracker_steps' => $response_tracker_steps,
        'response_devices' => $response_devices,
        'response_heart' => $response_heart,
        'response_friends' => $response_friends,
        'response_distance' => $response_distance,
      ));
      }
    }



      public function progressBar(){

        $progress = 0;

        $apis = $this->getDoctrine()->getRepository('AppBundle:UsersAccounts')->findByUid($this->getUser()->getId());
        //$sports_choose = $this->getDoctrine()->getRepository('AppBundle:UsersSports')->find($this->getUser()->getId());

        /*if($sports_choose->getFootball() || $sports_choose->getNatation() || $sports_choose->getRunning() || $sports_choose->getTennis()  || $sports_choose->getRugby())
        {
          $progress += 20;
        }*/

        if($apis != null){
          $progress += 20;
        }

        return $progress;
      }

}
