<?php

namespace AgroPlanning\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LanguageController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AgroPlanningUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
