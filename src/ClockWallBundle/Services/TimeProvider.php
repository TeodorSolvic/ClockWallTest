<?php

namespace ClockWallBundle\Services;

use ClockWallBundle\Services\Location\City;
use ClockWallBundle\Services\Location\LocationInterface;

/**
 * Class TimeProvider
 * @package ClockWallBundle\Services
 */
class TimeProvider
{
    /** @var LocationInterface[] $locations */
    private $locations = [];

    /**
     * @return LocationInterface[]
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param $name
     * @param $timezone
     * @param $identifier
     */
    public function addLocation($name, $timezone, $identifier)
    {
        $this->locations[] = new City($name, $timezone, $identifier);
    }
}
