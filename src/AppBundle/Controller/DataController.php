<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DataController extends Controller
{

  /**
  * @Route("/datamanager", name = "datamanager")
  */
  public function showAction(Request $request){
        return $this->render('datamanager/index.html.twig');
  }

}

?>
