<?php

namespace App;

use Iterator;

/*
 * Ejercicio
 * Implementar el código faltante en la clase People para que el código de ejemplo funcione
 * TIP: Iterator es una interfaz
 * TIP: Métodos mágicos
 */

/* POWER TIP Pueden extender la clase con otras clases o interfaces */

class People implements Iterator
{
    private $name;
    private $age;
    private $salary;
    private $attrs;
    private $current = 3;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function current()
    {
        return array_values($this->attrs[$this->current])[0];
    }

    public function key()
    {
        return array_keys($this->attrs[$this->current])[0];
    }

    public function valid()
    {
        return isset($this->attrs[$this->current]);
    }

    public function __toString()
    {
        return json_encode([
            'private' => '',
            'public' => ''
        ]);
    }

}