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

class DataController extends Controller
{

  /**
  * @Route("/datamanager/", name = "datamanager")
  */
  public function showAction(Request $request){


    $user = $this->getUser()->getId();
    $lastdata = array();
    $accounts = $this->getDoctrine()->getRepository('AppBundle:UsersAccounts')->findByUid($this->getUser()->getId());

    foreach($accounts as $account){

      $aid = $account->getAid();

      if($account->getBrand() == "fitbit"){
        $lastdata_fitbit = $this->getDoctrine()->getRepository('AppBundle:UsersFitbitSteps')->findOneBy(array('id' => ($this->getUser()->getId())), array('date' => 'desc'));
      }

      if($account->getBrand() == "jawbone"){
        $lastdata_jawbone = $this->getDoctrine()->getRepository('AppBundle:UsersJawboneBodyEvents')->findOneBy(array('id' => ($this->getUser()->getId())), array('date' => 'desc'));

      }

    }

    return $this->render('datamanager/index.html.twig', array(
      'lastdata_fitbit' => $lastdata_fitbit,
      'lastdata_jawbone' => $lastdata_jawbone,
      'accounts' => $accounts
    ));
  }



  /**
  * @Route("/datamanager/account/{aid}")
  */
  public function showAcccount(Request $request){
    $account = $request->attributes->get('aid');
    return $this->render('datamanager/account.html.twig');
  }

  /**
  * @Route("/datamanager/remove/{aid}")
  */
  public function removeAccount(Request $request){

    $em = $this->getDoctrine()->getManager();
    $account_to_delete = $this->getDoctrine()->getRepository('AppBundle:UsersAccounts')->findOneByAid($request->attributes->get('aid'));
    $deleted = false;

    if($account_to_delete != null){
      if($account_to_delete->getUid() == $this->getUser()->getId()){

        $brand = $account_to_delete->getBrand();

        if($brand == "fitbit"){

          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersFitbitCalories')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }
          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersFitbitCaloriesBmr')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }
          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersFitbitDistances')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }
          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersFitbitHeartrate')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }
          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersFitbitSteps')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }
          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersFitbitWeight')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }

        }

        if($brand == "jawbone"){

          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersJawboneBodyEvents')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }

          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersJawboneHeartrates')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }

          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersJawboneMoves')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }

          foreach ($this->getDoctrine()->getRepository('AppBundle:UsersJawboneSleeps')->findByAid($request->attributes->get('aid')) as $d) {
            $em->remove($d);
          }

        }

        $em->remove($account_to_delete);
        $em->flush();

        $deleted = true;
      }
    }

    return $this->render('datamanager/remove.html.twig', array(
      'deleted' => $deleted,
    ));
  }
}

?>
