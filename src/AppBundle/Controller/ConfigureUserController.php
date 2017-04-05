<?php
namespace AppBundle\Controller;

use AppBundle\Entity\UsersAccounts;
use AppBundle\Entity\UsersFitbitCalories;
use AppBundle\Entity\UsersFitbitDistances;
use AppBundle\Entity\UsersFitbitCaloriesBmr;
use AppBundle\Entity\UsersFitbitHeartrate;
use AppBundle\Entity\UsersFitbitSteps;
use AppBundle\Entity\UsersFitbitWeight;

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


class ConfigureUserController extends Controller
{


    public function progressBar(){

      $progress = 0;

      $apis = $this->getDoctrine()->getRepository('AppBundle:UsersAccounts')->findByUid($this->getUser()->getId());
      $sports_choose = $this->getDoctrine()->getRepository('AppBundle:UsersSports')->find($this->getUser()->getId());

      if($sports_choose->getFootball() || $sports_choose->getAthletisme() || $sports_choose->getMusculation() || $sports_choose->getRugby()  || $sports_choose->getGolf()
      || $sports_choose->getTennis()   || $sports_choose->getCyclisme()   || $sports_choose->getBasket()   || $sports_choose->getEscrime()   || $sports_choose->getKarate()
        || $sports_choose->getVolley()   || $sports_choose->getFoot()   || $sports_choose->getBaseball()   || $sports_choose->getHockey())
      {
        $progress += 33;
      }

      if($apis != null){
        $progress += 33;
      }

      return $progress;
    }


  /**
  * @Route("/configure", name = "configure")
  */
  public function showAction(Request $request)
  {
    $progress = self::progressBar();
    $user_id = $this->getUser()->getId();
    $user_accounts = $this->getDoctrine()->getRepository('AppBundle:UsersAccounts')->findByUid($user_id);

    return $this->render('config/configure.html.twig', array(
      'progress' => $progress,
      'accounts' => $user_accounts,
    ));
  }



  /**
  * @Route("/configure/sports", name = "sports")
  */
  public function setSports(Request $request){

    $progress=self::progressBar();
    $user_id = $this->getUser()->getId();

    $em = $this->getDoctrine()->getManager();
    $current_data = $this->getDoctrine()->getRepository('AppBundle:UsersSports')->find($user_id);

    if($current_data == null){
      $sports = new UsersSports();
      $sports->setId($user_id);
      $em->persist($sports);
      $em->flush();
    }

    $sports = $this->getDoctrine()->getRepository('AppBundle:Sports')->findAll();

    return $this->render('config/sports.html.twig', array(
      'already_checked' => $current_data,
      'sports' => $sports,
      'progress' => $progress,
    ));
  }

  /**
  * @Route("/configure/checksports", name = "configureSports")
  */
  public function configureSports(Request $request){

    $em = $this->getDoctrine()->getManager();
    $current_data = $this->getDoctrine()->getRepository('AppBundle:UsersSports')->find($this->getUser()->getId());

    $current_data->setFootball($request->request->has('Football'));
    $current_data->setFoot($request->request->has('Foot'));
    $current_data->setAthletisme($request->request->has('Athlétisme'));
    $current_data->setBaseball($request->request->has('Baseball'));
    $current_data->setCyclisme($request->request->has('Cyclisme'));
    $current_data->setEscrime($request->request->has('Escrime'));
    $current_data->setGolf($request->request->has('Golf'));
    $current_data->setMusculation($request->request->has('Musculation'));
    $current_data->setHockey($request->request->has('Hockey'));
    $current_data->setKarate($request->request->has('Karaté'));
    $current_data->setRugby($request->request->has('Rugby'));
    $current_data->setTennis($request->request->has('Tennis'));
    $current_data->setVolley($request->request->has('Volley'));

    $em->persist($current_data);
    $em->flush();

    return self::setObjectifs($request);

  }


  /**
  * @Route("/configure/objectifs", name = "objectifs")
  */
  public function setObjectifs(Request $request){

    $progress=self::progressBar();

    return $this->render('config/objectifs.html.twig',array(
      'progress' => $progress,
    ));
  }


  /**
  * @Route("/configure/samsung", name = "samsung")
  */
  public function getSamsungAPI(Request $request){

    return ConfigureUserController::showAction($request);
  }


  /**
  * @Route("/configure/garmin", name = "garmin")
  */
  public function getGarminAPI(Request $request){

    return ConfigureUserController::showAction($request);
  }

  public function checkExist($brand, $id){

    $accounts = $this->getDoctrine()->getRepository('AppBundle:UsersAccounts')->findByBrand($brand);

    foreach($accounts as $a){
      if($id == $a->getApiId()) return true;
    }
    return false;
  }

}
