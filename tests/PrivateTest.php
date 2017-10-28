<?php

/**
 * Instrucciones
 * Todos los tests deben de pasar
 * Considera utilizar métodos mágicos en caso de ser necesario
 * Recuerda lanzar excepciones con throw new \Exception('Message');
 */

use PHPUnit\Framework\TestCase;

class PrivateTest extends TestCase
{
    public function test_if_price_with_int_works()
    {
        $factura = new Properties\Invoice();
        $factura->item = 'Producto';
        $factura->price = 15;
        $this->assertEquals(17.4, $factura->getTotal());
    }

    public function test_if_price_with_float_works()
    {
        $factura = new Properties\Invoice();
        $factura->item = 'Producto';
        $factura->price = 15.0;
        $this->assertEquals(17.4, $factura->getTotal());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Debes ingresar un número
     */
    public function test_if_price_with_an_string_throws_an_exception()
    {
        $factura = new Properties\Invoice();
        $factura->item = 'Producto';
        $factura->price = '16.3x';
        $this->assertEquals(18.9, $factura->getTotal());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage El precio está indefinido
     */
    public function test_if_null_price_throws_an_exception()
    {
        $factura = new Properties\Invoice();
        $factura->item = 'Producto';
        $this->assertEquals(17.4, $factura->getTotal());
    }

    public function test_if_child_class_with_int_works()
    {
        $factura = new Properties\InvoiceWithDiscount();
        $factura->item = 'Producto';
        $factura->price = 15;
        $this->assertEquals(17.4, $factura->getTotal());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Debes ingresar un número
     */
    public function test_if_child_price_with_an_string_throws_an_exception()
    {
        $factura = new Properties\InvoiceWithDiscount();
        $factura->item = 'Producto';
        $factura->price = '16.3x';
        $this->assertEquals(18.9, $factura->getTotal());
    }

}
