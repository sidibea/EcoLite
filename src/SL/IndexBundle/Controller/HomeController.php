<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 26/6/15
 * Time: 12:02 AM
 */

namespace SL\IndexBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('SLIndexBundle::index.html.twig');
    }

}