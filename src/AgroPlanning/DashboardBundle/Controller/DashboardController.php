<?php

namespace AgroPlanning\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('AgroPlanningDashboardBundle::index.html.twig');
    }
}
