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


class RegisterController extends Controller
{
  /**
   * @Route("/default/register/apichoice")
   */
}
