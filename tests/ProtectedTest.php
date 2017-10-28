<?php

use PHPUnit\Framework\TestCase;
use Properties\FacturaConDescuento;

class ProtectedTest extends TestCase
{
    public function test_the_right_modifier_access_works()
    {
        $factura = new FacturaConDescuento(1000);
        $total = $factura->getTotal();
        $this->assertEquals(600, $total);
    }

    /**
     * @expectedException \Error
     */
    public function test_if_friendly_access_is_denied()
    {
        $factura = new FacturaConDescuento(1000);
        $price = $factura->price;
    }

    public function test_if_core_methods_cannot_be_overriden()
    {
        $reflection = new ReflectionClass(FacturaConDescuento::class);
        $getTotalIsFinal = $reflection->getMethod('getTotal')->isFinal();
        $this->assertTrue($getTotalIsFinal);
    }

}
