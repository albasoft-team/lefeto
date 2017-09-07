<?php

namespace Lefeto\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $logger = $this->get('logger');
        $logger->info('I just got the logger');
        $logger->error('An error occurred');
        return $this->render('base.html.twig');
    }
}
