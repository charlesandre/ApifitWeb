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


  /**
  * @Route("/configure", name = "configure")
  */
  public function showAction(Request $request)
  {
    $progress = self::progressBar();
    $user_id = $this->getUser()->getId();
    $user_accounts = $this->getDoctrine()->getRepository('AppBundle:UsersAccounts')->findByUid($user_id);

    $devices = $this->getDoctrine()
    ->getRepository('AppBundle:UsersDevices');

    $query = $devices->createQueryBuilder('p')
    ->where('p.uid = :uid')
    ->setParameter('uid', $user_id)
    ->getQuery();

    $devices = $query->getResult();


    return $this->render('config/configure.html.twig', array(
      'progress' => $progress,
      'accounts' => $user_accounts,
      'devices' => $devices,
    ));
  }



  /**
  * @Route("/configure/sports", name = "sports")
  */
  public function setSports(Request $request){

    $progress=self::progressBar();
    $user_id = $this->getUser()->getId();

    $em = $this->getDoctrine()->getManager();
    /*$current_data = $this->getDoctrine()->getRepository('AppBundle:UsersSports')->find($user_id);

    if($current_data == null){
      $sports = new UsersSports();
      $sports->setId($user_id);
      $em->persist($sports);
      $em->flush();
    }
*/
    return $this->render('config/sports.html.twig', array(
  //    'already_checked' => $current_data,
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
    $current_data->setNatation($request->request->has('Natation'));
    $current_data->setRunning($request->request->has('Running'));
    $current_data->setRugby($request->request->has('Rugby'));
    $current_data->setTennis($request->request->has('Tennis'));

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
