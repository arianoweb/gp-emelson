<?php

namespace Geopagos\ejercicio2;

/**
 * Clase Triangulo implementando la interfaz Figura
 * @version: 0.1
 * @Creado: 19 de febrero del 2018
 * @Modificado: 19 de febrero del 2018
 * @autor: Emelson Marquez
 */

use Geopagos\ejercicio2\Figura as Figura;

class Triangulo implements Figura
{
    private $base;
    private $altura;
    private $ladoA;
    private $ladoB;
    private $ladoC;

    /**
    * @param double base
    * @param double altura
    */
    public function __construct($base, $altura, $ladoA, $ladoB, $ladoC)
    {
        $this->base = $base;
        $this->altura = $altura;
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
        $this->ladoC = $ladoC;
   }

   /**
    * @return double
    */
   public function getArea()
   {
       $area = (($this->base * $this->altura) / 2);
       return $area;
   }

   public function getSuperficie()
   {
      $superficie = ($this->base * ($this->altura / 2));
      return $superficie;
   }

   public function getBase()
   {
      $base = ($this->getArea() * 2) / $this->altura;
      return $base;
   }

   public function getAltura()
   {
      $altura = ((2 * $this->getArea()) / $this->base);
      return $altura;
   }

   public function getDiametro()
   {
      return "Esta figura no posee diametro";
   }

   public function getTipo()
   {
       return "Triangulo";
   }
}
