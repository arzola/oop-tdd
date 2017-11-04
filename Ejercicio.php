<?php

/*
 * Ejercicio
 * Implementar el código necesario para cumplir todas las tareas
 * TIP: Todas las tareas se pueden combinar entre sí
 * TIP: Considera usar OOP
 * TIP: Reduce tu uso de condicionales
 * USAR TDD Para su resolución
 */

abstract class Facturable
{
    abstract public function print();
}

class Factura extends Facturable
{
    public function print()
    {
        return <<<FACTURA
        ======================\n
        =                    =\n
        =   FACTURA DIPAK    =\n
        =                    =\n
        =                    =\n
        =                    =\n
        =@@@@@@@@@@@@@@@@@@@@=\n
        ======================\n
FACTURA;
    }
}

$facturaOriginal = new Factura();
echo $facturaOriginal->print();

/* POR DEFAULT IMPRIME ESTO */

//        ======================
//
//        =                    =
//
//        =   FACTURA DIPAK    =
//
//        =                    =
//
//        =                    =
//
//        =                    =
//
//        =@@@@@@@@@@@@@@@@@@@@=
//
//        ======================

/* TIP: PUEDEN CREAR TODOS LOS OBJETOS QUE CONSIDEREN NECESARIOS */

/*
 * Tarea 1
 * Debe de existir la opción para agregar el total sin modificar el método original print() y
 * tiene que aparecer en lugar de los @@@@@@
 * EJEMPLO:
 *
 */

//        ======================
//
//        =                    =
//
//        =   FACTURA DIPAK    =
//
//        =                    =
//
//        =                    =
//
//        =                    =
//
//        =120                 =
//
//        ======================

/*
 * Tarea 2
 * Debe de existir la opción para cambiar el nombre de FACTURA DIPAK sin modificar el método original print()
 * EJEMPLO:
 *
 */

//		======================
//
//        =                    =
//
//        = NUEVA FACTURA      =
//
//        =                    =
//
//        =                    =
//
//        =                    =
//
//        =@@@@@@@@@@@@@@@@@@@@=
//
//        ======================

/*
 * Tarea 3
 * Deben de poder combinarse las tareas 1 y 2
 * EJEMPLO
 */

//		======================
//
//        =                    =
//
//        =NUEVA FACTURA       =
//
//        =                    =
//
//        =                    =
//
//        =                    =
//
//        =120                 =
//
//        ======================

/*
 * Tarea 4
 * Deben de existir un método para imprimir facturas con # en lugar de =
 * Se deben de poder hacer también las tareas 1, 2 y 3
 * EJEMPLO
 */

######################

#                    #

#NUEVA FACTURA       #

#                    #

#                    #

#                    #

#120                 #

######################

/*
 * Tarea 5
 * Debe de ser fácil hacer un nuevo cambio a la factura por ejemplo agregarle IVA hasta abajo
 * Se debe de poder combinar con las tareas anteriores
 * EJEMPLO
 */

//        ======================
//
//        =                    =
//
//        =   FACTURA DIPAK    =
//
//        =                    =
//
//        =                    =
//
//        =                    =
//
//        =@@@@@@@@@@@@@@@@@@@@=
//
//        ======================
//        =                    =
//
//        = EL IVA ES: 1.16    =
//
//        =                    =