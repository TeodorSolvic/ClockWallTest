<?php

namespace ClockWallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package ClockWallBundle\Controller
 */
class MainController extends Controller
{
    public function indexAction()
    {
        $timeProvider = $this->get('clock_wall.time_provider');

        return $this->render(
            'ClockWallBundle:main:index.html.twig',
            [
                'locationsTimeData' => $timeProvider->getLocations()
            ]
        );
    }
}
