<?php

namespace SL\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('SLHomeBundle:HomePage:index.html.twig');
    }
}
