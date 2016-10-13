<?php
namespace Portal\Bundle\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortalPublicBundle:Default:index.html.twig');
    }
}
