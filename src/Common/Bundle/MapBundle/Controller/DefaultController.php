<?php
namespace Common\Bundle\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Common\Bundle\MapBundle\Library\MapTiler;

class DefaultController extends Controller
{
    public function testGenerateAction()
    {
        $map_tiler = new MapTiler( $_SERVER['DOCUMENT_ROOT'] . '/files/whelchshire.jpg', array(
		  'tiles_path' => $_SERVER['DOCUMENT_ROOT'] . '/files/maps/grey/',
		  'zomm_min' => 0,
		  'zoom_max' => 20,
		  'force' => true,
		  'fill' => 'black'
		));
		//execute
		try {
		  $map_tiler->process(true);
		} catch (Exception $e) {
		  echo $e->getMessage();
		  echo $e->getTraceAsString();
		}

        return $this->render('CommonMapBundle:Default:Test/generate.html.twig');
    }

    public function testViewAction()
    {
        return $this->render('CommonMapBundle:Default:Test/view.html.twig');
    }
}
