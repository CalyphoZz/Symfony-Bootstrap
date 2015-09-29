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
<<<<<<< HEAD
    public function servicesAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:services.html.twig');
    }
    public function personnelAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:personnel.html.twig');
    }
    public function annuaireAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:annuaire.html.twig');
    }
    public function horairesAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:horaires.html.twig');
    }
    public function planAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:plan.html.twig');
    }
    public function infosAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:infos.html.twig');
    }
=======
>>>>>>> 7539ca88f2b8bc04c6e2d2a3b48e5517deca7a56
}
