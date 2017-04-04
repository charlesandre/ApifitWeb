<?php
namespace AppBundle\Controller;

use AppBundle\Entity\UsersJawboneSleeps;
use AppBundle\Entity\UsersJawboneMoves;
use AppBundle\Entity\UsersJawboneHeartrates;
use AppBundle\Entity\UsersJawboneBodyEvents;

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


class JawboneDataController extends Controller
{

  /**
  * @Route("/getjawbone", name = "jawbone")
  */
  public function getJawboneAPI(Request $request){

    $progress = self::progressBar();

    // $devices = new UsersDevices();
    // $devices->setId($this->getUser()->getId());


    if (!isset($_GET['code'])) {

      $scopes[] = "basic_read";
      $scopes[] = "extended_read";
      $scopes[] = "location_read";
      $scopes[] = "friends_read";
      $scopes[] = "mood_read";
      $scopes[] = "mood_write";
      $scopes[] = "move_read";
      $scopes[] = "move_write";
      $scopes[] = "sleep_read";
      $scopes[] = "sleep_write";
      $scopes[] = "meal_read";
      $scopes[] = "meal_write";
      $scopes[] = "weight_read";
      $scopes[] = "weight_write";
      $scopes[] = "cardiac_read";
      $scopes[] = "cardiac_write";
      $scopes[] = "generic_event_read";
      $scopes[] = "generic_event_write";

      $scope = implode(' ', $scopes);

      $config = [
        'response_type' => 'code',
        'client_id'     => '7PcmTEzR-a8',
        'scope' => $scope,
        'redirect_uri'  => 'https://www.apifit.fr/getjawbone'
      ];

      $url = "https://jawbone.com/auth/oauth2/auth?" . http_build_query($config);
      header("Location: {$url}");
      exit;

    }else {

      $config = [
        'client_id'     => '7PcmTEzR-a8',
        'client_secret' => '786f0b1806fabf1a4edd99c13d168e039182b367',
        'grant_type' => 'authorization_code',
        'code' => $_GET['code']
      ];

      $url = "https://jawbone.com/auth/oauth2/token?" . http_build_query($config);
      $response = file_get_contents($url);
      $access_token = json_decode($response, true)['access_token'];

      $url = "https://jawbone.com/nudge/api/v.1.1/users/@me";

      $opts = array(
        'http'=>array(
          'method'=>"GET",
          'header'=>"Authorization: Bearer {$access_token}\r\n"
        )
      );

      $context = stream_context_create($opts);
      $response = file_get_contents($url, false, $context);
      $utilisateur = json_decode($response, true);


      if(!self::checkExist('jawbone', $utilisateur['meta']['user_xid'])) {

        $em = $this->getDoctrine()->getManager();
        $account = new UsersAccounts();
        $account->setUid($this->getUser()->getId());
        $account->setBrand('jawbone');
        $account->setApiId($utilisateur['meta']['user_xid']);
        $account->setNameAccount($utilisateur['data']['first']);

        $em->persist($account);
        $em->flush();
      }else{
        $account =  $this->getDoctrine()->getRepository('AppBundle:UsersAccounts')->findOneBy(array('api_id' => $utilisateur['meta']['user_xid']));
      }


      $url = "https://jawbone.com/nudge/api/v.1.1/users/@me/body_events";

      $opts = array(
        'http'=>array(
          'method'=>"GET",
          'header'=>"Authorization: Bearer {$access_token}\r\n"
        )
      );

      $context = stream_context_create($opts);
      $response = file_get_contents($url, false, $context);
      $bodyevents = json_decode($response, true);

      $em = $this->getDoctrine()->getManager();

      foreach($bodyevents['data']['items'] as $c)
      {
        $date = new \DateTime(\DateTime::createFromFormat('Ymd', $c['date'])->format('Y-m-d'));

        $be = new UsersJawboneBodyEvents();

        $be->setId($this->getUser()->getId());
        $be->setAid($account->getAid());

        $be->setDate($date);
        $be->setWeight($c['weight']);
        $be->setLeanMass($c['lean_mass']);
        $be->setBodyFat($c['body_fat']);
        $be->setBmi($c['bmi']);

        $em->persist($be);
      }





      $url = "https://jawbone.com/nudge/api/v.1.1/users/@me/moves";

      $opts = array(
        'http'=>array(
          'method'=>"GET",
          'header'=>"Authorization: Bearer {$access_token}\r\n"
        )
      );

      $context = stream_context_create($opts);
      $response_moves = file_get_contents($url, false, $context);
      $moves = json_decode($response_moves, true);

      foreach($moves['data']['items'] as $c)
      {
        $date = new \DateTime(\DateTime::createFromFormat('Ymd', $c['date'])->format('Y-m-d'));

        $m = new UsersJawboneMoves();

        $m->setId($this->getUser()->getId());
        $m->setAid($account->getAid());

        $m->setDate($date);
        $m->setDistance($c['details']['distance']);
        $m->setCalories($c['details']['calories']);
        $m->setSteps($c['details']['steps']);
        $m->setActiveTime($c['details']['active_time']);

        $em->persist($m);


      }










      $url = "https://jawbone.com/nudge/api/v.1.1/users/@me/heartrates";

      $opts = array(
        'http'=>array(
          'method'=>"GET",
          'header'=>"Authorization: Bearer {$access_token}\r\n"
        )
      );

      $context = stream_context_create($opts);
      $response = file_get_contents($url, false, $context);
      $heartrate = json_decode($response, true);


      foreach($heartrate['data']['items'] as $c)
      {
        $date = new \DateTime(\DateTime::createFromFormat('Ymd', $c['date'])->format('Y-m-d'));
        $hr = new UsersJawboneHeartrates();

        $hr->setDate($date);
        $hr->setRestingHeartrate($c['resting_heartrate']);
        $em->persist($hr);

      }





      $url = "https://jawbone.com/nudge/api/v.1.1/users/@me/sleeps";

      $opts = array(
        'http'=>array(
          'method'=>"GET",
          'header'=>"Authorization: Bearer {$access_token}\r\n"
        )
      );

      $context = stream_context_create($opts);
      $response = file_get_contents($url, false, $context);
      $sleeps = json_decode($response, true);

      foreach($sleeps['data']['items'] as $v){
        $date = new \DateTime(\DateTime::createFromFormat('Ymd', $c['date'])->format('Y-m-d'));
        $s = new UsersJawboneSleeps();

        $s->setDate($date);
        $s->setAwakenings($v['details']['awakenings']);
        $s->setDuration($v['details']['duration']);

        $em->persist($s);

      }
    }


    // $account->setJawboneName($api_name);
    // $device->setDevice($api_device);
    // $em->persist($devices);
    $em->flush();

    return $this->render('config/jawbonedata.html.twig', array(
      'utilisateur' =>  $utilisateur['data']['first'],
      'weight' => $utilisateur['data']['weight'],
      'height' => $utilisateur['data']['height']
    ));
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
