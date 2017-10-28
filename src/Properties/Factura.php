<?php

namespace Properties;


class Factura
{
    private $price;
    /**
     * Factura constructor.
     */
    private function __construct($price)
    {
        $this->price = $price;
    }

    final public function getTotal()
    {
        return $this->process();
    }

    final private function process()
    {
        return $this->price;
    }

}