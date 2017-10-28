<?php

use PHPUnit\Framework\TestCase;
use Properties\Varidic\Items;

class ItemsTest extends TestCase
{
    public function test_if_is_countable()
    {
        $items = new Items();
        $this->assertInstanceOf('Countable', $items);
    }

    public function test_if_counts_return_the_sum_of_items()
    {
        $items = new Items(1, 2, 3, 4, 5, 6, 7, 8);
        $this->assertEquals(36, count($items));

        $items = new Items(1, 2, 3);
        $this->assertEquals(6, count($items));

        $items = new Items();
        $this->assertEquals(0, count($items));
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage No se pueden procesar cadenas de texto
     */
    public function test_if_string_is_passed_an_exception_is_thrown()
    {
        $items = new Items('8', 1, 2, 3);
        $this->assertEquals(6, count($items));
    }

}
