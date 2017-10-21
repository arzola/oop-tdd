<?php
/**
 * Created by PhpStorm.
 * User: arzola
 * Date: 10/21/17
 * Time: 12:10 AM
 */

use App\Magic;
use PHPUnit\Framework\TestCase;

class MagicTest extends TestCase
{
    public function test_magic_results()
    {
        $magic = new Magic();
        $result1 = $magic->queHayAmigos();
        $result2 = $magic->nofunciona();
        $result3 = $magic->hello('world');
        $result4 = $magic->hello();
        $randomWord = uniqid('randomMethod', false);
        $result5 = $magic->{$randomWord}();

        $this->assertEquals('Hola llamando a queHayAmigos()',$result1);

        $this->assertEquals('Hola llamando a nofunciona()',$result2);

        $this->assertEquals('Hello World',$result3);

        $this->assertEquals('Hola llamando a hello()',$result4);

        $this->assertEquals("Hola llamando a $randomWord()",$result5);

    }
}
