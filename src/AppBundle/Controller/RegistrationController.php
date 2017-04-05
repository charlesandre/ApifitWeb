<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserReg;
use AppBundle\Form\UserConn;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{

  /**
  * @Route("/register", name="register")
  */
  public function registerAction(Request $request)
  {
    $new_user = new User();
    $formreg = $this->createForm(UserReg::class, $new_user);
    $formreg->handleRequest($request);
    $formconn = $this->createForm(UserConn::class, $new_user);
    $formconn->handleRequest($request);

    if ($formreg->isSubmitted() && $formreg->isValid()) {
      $encoder = $this->get('security.password_encoder');
      $password = $encoder->encodePassword($new_user, $new_user->getPlainPassword());
      $new_user->setPassword($password);

      $new_user->setRole('ROLE_USER');
      $new_user->setLevel(1);
      $new_user->setXp(0);

      $new_sports = new UsersSports();
      $new_sports->setId($new_user->getId());

      $new_obj = new UsersObjectifs();
      $new_obj->setId($new_user->getId());

      $em = $this->getDoctrine()->getManager();
      $em->persist($new_user);
      $em->persist($new_sports);
      $em->persist($new_obj);

      $em->flush();

      return $this->redirectToRoute('login');
    }


    if ($formconn->isSubmitted() && $formconn->isValid()) {
      return $this->redirectToRoute('login');
    }

    return $this->render('auth/register.html.twig', [
      'formreg' => $formreg->createView(), 'formconn' => $formconn->createView(),
    ]);
  }
}
