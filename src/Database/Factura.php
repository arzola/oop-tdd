<?php

namespace Db;

class Factura
{
    public function print()
    {
        return $this->getTotal();
    }

    private function getTotal()
    {
        return '$1,000';
    }
}