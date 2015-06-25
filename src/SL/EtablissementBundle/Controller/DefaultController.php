<?php

namespace SL\EtablissementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SLEtablissementBundle:Default:index.html.twig', array('name' => $name));
    }
}
