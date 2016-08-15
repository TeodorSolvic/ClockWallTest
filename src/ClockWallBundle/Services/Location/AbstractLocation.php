<?php

namespace ClockWallBundle\Services\Location;

/**
 * Class AbstractLocation
 * @package ClockWallBundle\Services\Location
 */
abstract class AbstractLocation implements LocationInterface
{
    /** @var string $name */
    private $name;

    /** @var string $timezone */
    private $timezone;

    /** @var string $identifier */
    private $identifier;

    /**
     * @param $name
     * @param $timezone
     * @param $identifier
     */
    public function __construct($name, $timezone, $identifier)
    {
        $this->name = $name;
        $this->timezone = $timezone;
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @return string
     */
    public function getCurrentTimestamp()
    {
        $dateTime = new \DateTime('now', new \DateTimeZone($this->timezone));

        return strtotime($dateTime->format('Y-m-d H:i:s'));
    }
}
