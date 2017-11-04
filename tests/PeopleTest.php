<?php

use App\People;
use PHPUnit\Framework\TestCase;

class PeopleTest extends TestCase
{
    private $people;
    private $randomWord;

    protected function setUp()
    {
        parent::setUp();
        $this->people = new People('Oscar', 33, 10);
        $this->randomWord = uniqid('randomMethod', false);
        $this->people->{$this->randomWord} = 'lol'; //Agregando una nueva propiedad pública
        $this->people->fino = true; //Agregando una nueva propiedad pública
    }

    public function test_if_private_variables_cannot_be_overriden()
    {
        $this->people->name = 'Mauricio'; //Intentando cambiar un atributo privado
        $this->people->age = 22;  //Intentando cambiar un atributo privado
        $this->people->salary = 33;  //Intentando cambiar un atributo privado
        $this->assertEquals('Oscar', $this->people->name);
        $this->assertEquals(33, $this->people->age);
        $this->assertEquals(10, $this->people->salary);
    }

    public function test_if_custom_public_variables_are_stored()
    {
        $this->assertEquals('Oscar', $this->people->name);
        $this->assertEquals('lol', $this->people->{$this->randomWord});
    }

    public function test_if_iterator_only_return_custom_public_variables()
    {
        foreach ($this->people as $key => $val) { //Acceder a las propiedades "públicas" únicamente al iterar el objeto
            $keys[] = $key;
            $values[] = $val;
        }
        $this->assertEquals($this->randomWord, $keys[0]);
        $this->assertEquals('fino', $keys[1]);
        $this->assertEquals('lol', $values[0]);
        $this->assertEquals(1, $values[1]);
    }

    public function test_if_string_object_prints_all_signature()
    {
        $this->assertEquals('{"private":{"name":"Oscar","age":33,"salary":10},"public":[{"' . $this->randomWord . '":"lol"},{"fino":true}]}',
            (string)$this->people);
    }
}
