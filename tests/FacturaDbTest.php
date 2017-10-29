<?php

use Db\Factura;
use PHPUnit\Framework\TestCase;

class FacturaDbTest extends TestCase
{
    public function test_if_factura_return_800()
    {
        $factura = new \Db\FacturaConDescuento();
        $total = $factura->print();
        $this->assertEquals('$800',$total);
    }
}
