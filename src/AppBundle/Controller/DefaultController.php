<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Response;
use djchen\OAuth2\Client\Provider\Fitbit;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Form\UserType;


class DefaultController extends Controller
{

    /**
     * @Route("/default/index")
     */

     public function choiceAPI(Request $request){



       return $this->render('default/register.html.twig'
      );
     }
      public function registerAction(Request $request)
    {

            $user = new Users();

            $form = $this->createForm(UserType::class, $user);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                DefaultController::choiceAPI($request);
            }


         return $this->render('default/index.html.twig', array(
            'form' => $form->createView()
        ));
    }



}
