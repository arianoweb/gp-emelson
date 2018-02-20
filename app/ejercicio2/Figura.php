<?php

namespace Geopagos\ejercicio2;

/**
 * Interfaz base para la creacion de objetos geometricos
 * @version: 0.1
 * @Creado: 19 de febrero del 2018
 * @Modificado: 19 de febrero del 2018
 * @autor: Emelson Marquez
 */

interface Figura
{
    public function getArea();
    public function getSuperficie();
    public function getBase();
    public function getAltura();
    public function getDiametro();
    public function getTipo();
}
