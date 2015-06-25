<?php

namespace SL\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = "index";
        return $this->render('SLIndexBundle:Default:index.html.twig', array('name' => $name));
    }
}
