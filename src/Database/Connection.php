<?php

namespace Db;
use Db\Drivers\DatabaseDriver;


class Connection
{
    private $driver;

    /**
     * Connection constructor.
     */
    public function __construct(DatabaseDriver $driver)
    {
        $this->driver = $driver;
    }

    public function getDriver()
    {
        return $this->driver->getName();
    }

}