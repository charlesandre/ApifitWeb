<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
  /**
     * @Route("/", name="welcome")
     */
    public function showAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }
}
