<?php

namespace ClockWallBundle\Services\Location;

/**
 * Interface LocationInterface
 * @package ClockWallBundle\Services\Location
 */
interface LocationInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getCurrentTimestamp();

    /**
     * @return string
     */
    public function getIdentifier();
}
