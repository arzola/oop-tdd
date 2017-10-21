<?php namespace App;
/*
 * Ejercicio
 * Implementar el código faltante para que funcione el código de ejemplo en la parte inferior
 * TIP: Pueden agregar parámetros a los ejemplos si lo consideran necesario
 * TIP: Poner atención en el funcionamiento de las interfaces
 */


class User
{
    private $name;
    private $notificator;

    public function __construct($name, Notificable $notificator)
    {
        $this->name = $name;
    }

    public function update()
    {

    }

    public function getInfo()
    {
        return $this->name;
    }
}