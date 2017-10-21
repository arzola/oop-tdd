<?php

use App\Factura;
use PHPUnit\Framework\TestCase;

class FacturaTest extends TestCase
{
    public function test_if_json_is_returned()
    {
        $factura = new Factura(123);
        $value = (string) $factura;
        $this->assertJson($value, '{"factura":123}');

        $facturaNueva = new Factura(987283);
        $value = (string) $facturaNueva;
        $this->assertJson($value, '{"factura":987283}');
    }
}
