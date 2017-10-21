<?php

use App\Recibo;
use PHPUnit\Framework\TestCase;

class ReciboTest extends TestCase
{
    public function test_if_recibo_get_the_correct_amount()
    {
        $recibo = new Recibo();
        $recibo->addItem('Alitas de Hooters', 123.33);

        $this->assertEquals(143.06, $recibo->print());

    }

    public function test_if_recibo_with_an_array_get_the_correct_amount()
    {
        $recibo = new Recibo(['Hamburguesa paps' => 120.34, 'Malteada' => 76]);

        $this->assertEquals(227.75, $recibo->print());

    }

    public function test_if_recibo_with_init_array_accepts_to_add_another_item()
    {
        //TODO
    }
}
