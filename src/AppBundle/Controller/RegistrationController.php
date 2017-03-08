<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\UsersData;
use AppBundle\Entity\UsersSports;
use AppBundle\Form\UserReg;
use AppBundle\Form\UserConn;
//use AppBundle\Form\UserType;
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

      $new_field_data = new UsersData();
      $new_field_data->setId($new_user->getId());
      $new_field_sports = new UsersSports();
      $new_field_sports->setId($new_user->getId());

      $em = $this->getDoctrine()->getManager();
      $em->persist($new_user);
      $em->persist($new_field_data);
      $em->persist($new_field_sports);
      $em->flush();

      return $this->redirectToRoute('register');
    }


    if ($formconn->isSubmitted() && $formconn->isValid()) {
      return $this->redirectToRoute('login');
    }

    return $this->render('auth/register.html.twig', [
      'formreg' => $formreg->createView(), 'formconn' => $formconn->createView(),
    ]);
  }

  /*public function registerAction(Request $request)
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
      $em->persist($new_data);
      return $this->redirectToRoute('login');
    }

    return $this->render('auth/register.html.twig', array(
      'formRegister' => $form->createView()
    ));
  }

   ===== Ton code
   */
}
