<?php

namespace Tools\Bundle\NamegeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ToolsNamegeneratorBundle:Default:index.html.twig');
    }
}
