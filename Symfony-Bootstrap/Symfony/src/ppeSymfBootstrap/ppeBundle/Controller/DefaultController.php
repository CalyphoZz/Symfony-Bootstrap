<?php

namespace ppeSymfBootstrap\ppeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        return $this->render('ppeSymfBootstrapppeBundle:Default:accueil.html.twig');
    }
}
