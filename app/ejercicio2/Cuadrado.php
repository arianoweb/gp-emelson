<?php

namespace Geopagos\ejercicio2;

/**
 * Clase Cuadrado implementando la interfaz Figura
 * @version: 0.1
 * @Creado: 19 de febrero del 2018
 * @Modificado: 19 de febrero del 2018
 * @autor: Emelson Marquez
 */

use Geopagos\ejercicio2\Figura as Figura;

class Cuadrado implements Figura
{
    private $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    /**
     * @return double
     */
    public function getArea()
    {
        $area = ($this->lado * $this->lado);
        return $area;
    }

    public function getSuperficie()
    {
      $superficie = ($this->lado * 2);
      return $superficie;
    }

    public function getBase()
    {
        $base = ($this->lado * 2);
        return $base;
    }

    public function getAltura()
    {
        return $this->lado;
    }

    public function getDiametro()
    {
        return "Esta figura no posee diametro";
    }

    public function getTipo()
    {
        return "Cuadrado";
    }
}
