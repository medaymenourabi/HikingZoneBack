<?php

namespace HikingZone\HikingZoneWebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HikingZoneHikingZoneWebServiceBundle:Default:index.html.twig');
    }
}
