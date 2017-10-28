<?php

namespace App;

/*
 * Ejercicio
 * Implementar clase Recibo para que funcione el código de ejemplo
 * Agregar el I.V.A al costo final al 16%
 * Considera usar tus mejores prácticas
 */
/**
 * Class Recibo
 *
 * @package App
 */
class Recibo
{
    public function print()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'] * Recibo::IVA;
        }

        return $total;
    }
}