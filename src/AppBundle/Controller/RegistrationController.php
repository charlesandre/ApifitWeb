<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
/*
use AppBundle\Form\UserReg;
use AppBundle\Form\UserConn;
*/
use AppBundle\Form\UserType;
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
    $user = new User();
    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

      $em = $this->getDoctrine()->getManager();

      $encoder = $this->get('security.password_encoder');
      $password = $encoder->encodePassword($user, $user->getPlainPassword());
      $user->setPassword($password);

      $user->setRole('ROLE_USER');

      $em->persist($user);
      $em->flush();

    /*  $new_data = $this->getDoctrine()->getRepository('AppBundle:UsersData');
      $new_data->setId($user->getId());
      $em->persist($new_data);*/

      return $this->redirectToRoute('login');
    }

    return $this->render('auth/register.html.twig', array(
      'formRegister' => $form->createView()
    ));
  }
  
  /* ===== Ton code
  public function registerAction(Request $request)
  {
    $user = new User();
    $formreg = $this->createForm(UserReg::class, $user);
    $formreg->handleRequest($request);
    $formconn = $this->createForm(UserConn::class, $user);
    $formconn->handleRequest($request);

    if ($formreg->isSubmitted() && $formreg->isValid()) {

      $encoder = $this->get('security.password_encoder');
      $password = $encoder->encodePassword($user, $user->getPlainPassword());
      $user->setPassword($password);

      $user->setRole('ROLE_USER');


      $em = $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();

      return $this->redirectToRoute('register');
    }

    if ($formconn->isSubmitted() && $formconn->isValid()) {

      return $this->redirectToRoute('login');
    }

    return $this->render('auth/register.html.twig', [
      'formreg' => $formreg->createView(), 'formconn' => $formconn->createView(),
    ]);
  }*/
}
