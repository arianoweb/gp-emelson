<?php

namespace Geopagos\ejercicio2;

/**
 * Clase Factory para instanciar objetos geometricos
 * @version: 0.1
 * @Creado: 19 de febrero del 2018
 * @Modificado: 19 de febrero del 2018
 * @autor: Emelson Marquez
 */

use Geopagos\ejercicio2\Circulo as Circulo;
use Geopagos\ejercicio2\Triangulo as Triangulo;
use Geopagos\ejercicio2\Cuadrado as Cuadrado;

class FFactory
{
  /**
   * Crea un nuevo objeto geometrico
   * @param   string  tipo
   * @param   double  radio
   * @param   double  lado
   * @param   double  base
   * @param   double  $altura
   * @param   double  $ladoA
   * @param   double  $ladoB
   * @param   double  $ladoC
   * @return Objeto Figura
   */
    public static function crear($tipo, $radio = 0, $lado = 0, $base = 0, $altura = 0, $ladoA = 0, $ladoB = 0, $ladoC = 0)
    {
        $figura = null;
        switch ($tipo) {
            case 'circulo':
                $figura = new Circulo($radio);
                break;
            case 'cuadrado':
                $figura = new Cuadrado($lado);
                break;
            case 'triangulo':
                $figura = new Triangulo($base, $altura, $ladoA, $ladoB, $ladoC);
                break;
            default:
                echo 'No se pudo crear la figura, especifique una entre: circulo, triangulo o circlo';
                break;
        }
        return $figura;
    }
}
