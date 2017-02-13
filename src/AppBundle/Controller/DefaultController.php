<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use djchen\OAuth2\Client\Provider\Fitbit;


class DefaultController extends Controller
{

    /**
     * @Route("/default/index")
     */


      public function indexAction(Request $request)
    {

      $user = new User();


      $form = $this->createFormBuilder($user)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();

         return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));



    }

}
