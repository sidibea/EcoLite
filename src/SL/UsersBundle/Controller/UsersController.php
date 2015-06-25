<?php

namespace SL\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

Class UsersController extends  Controller
{
    public function listAction()
    {

        return $this->render('SLUsersBundle:employees:list.html.twig');

    }
}