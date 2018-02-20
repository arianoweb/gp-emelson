<?php

namespace Geopagos\ejercicio2;

/**
 * Clase Circulo
 * @version: 0.1
 * @Creado: 19 de febrero del 2018
 * @Modificado: 19 de febrero del 2018
 * @autor: Emelson Marquez
 */

use Geopagos\ejercicio2\Figura as Figura;

class Circulo implements Figura
{
    private $radio;
    static $PI = 3.1415;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    /**
     * @return double
     */
    public function getArea()
    {
        $area = (self::$PI * $this->radio * $this->radio);
        return $area;
    }

    public function getSuperficie()
    {
        $superficie = (self::$PI * ($this->radio * 2));
        return $superficie;
    }

    public function getBase()
    {
        return "Esta figura no posee base";
    }

    public function getAltura()
    {
        return "Esta figura no posee altura";
    }

    public function getDiametro()
    {
        $diametro = ($this->radio * 2);
        return $diametro;
    }

    public function getTipo()
    {
        return "Circulo";
    }
}
