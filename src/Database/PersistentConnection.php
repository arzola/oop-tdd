<?php

namespace Db;

use Db\Drivers\DatabaseDriver;

class PersistentConnection extends Connection
{

    public function __construct(DatabaseDriver $driver)
    {
        $this->type = 'Persistent';
    }

}