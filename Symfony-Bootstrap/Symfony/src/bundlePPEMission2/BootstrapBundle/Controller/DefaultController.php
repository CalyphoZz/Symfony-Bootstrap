<?php

namespace bundlePPEMission2\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:index.html.twig', array('name' => $name));
    }
    public function accueilAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:accueil.html.twig');
    }
}
