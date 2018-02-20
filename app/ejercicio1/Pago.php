<?php

namespace Geopagos\ejercicio1;

/**
 * Clase Pago para la busqueda, registro, modificado y eliminado de pagos
 * @version: 0.1
 * @Creado: 19 de febrero del 2018
 * @Modificado: 19 de febrero del 2018
 * @autor: Emelson Marquez
 */

use Geopagos\Clases\Usuario as Usuario;

class Pago
{
    private $codigoPago;
    private $importe;
    private $fecha;
    public $usuario;

    public function __construct()
    {

    }

    public function getCodigoPago()
    {
        return $this->codigoPago;
    }

    public function setCodigoPago($codigoPago)
    {
        $this->codigoPago = $codigoPago;
    }

    public function getImporte()
    {
        return $this->importe;
    }

    public function setImporte($importe)
    {
        $this->importe = $importe;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
      $this->fecha = $fecha;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario = null)
    {
      $this->usuario = $usuario;
    }

    private function validarFecha($fecha)
    {

        $diferencia = strtotime($fecha) - strtotime(date('Y-m-d'));
        return ($diferencia >= 0) ? false : true;
    }

    /**
     * Almacena la informacion del pago en el repositorio de datos, si al llamarse este metodo
     * el objeto tiene un codigo de pago la data del mismo sera actializada en el repositorio
     * en caso que sea 0 se creara un nuevo registro en el repositorio con la data del objeto
     * @return boolean
     */
    public function guardar()
    {
        if($this->importe <= 0 || $this->validarFecha($this->fecha) || $this->usuario->getCodigoUsuario() <= 0)
        {
            return false;
        }
        else
        {
            // SQL para crear un nuevo pago

            $this->codigoPago = rand(); // Valor de prueba
            return true;
        }
    }

    /**
     * Elimina el pago del repositorio segun el id que contenga el objeto instanciado
     * @return boolean
     */
    public function eliminar()
    {
        if($this->codigoPago > 0 && is_numeric($this->codigoPago))
        {
            // SQL para eliminar el pago y sus referencias
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Retorna un array de codigos de pagos.
     * Si el $codigo de parametro es pasado al momento de llamar el metodo y es mayor a 0 se cargaran los pagos
     * de dicho codigo de usuario en caso contrario se cargaran todos los pagos en el repositorio
     * @param  int      $codigoUsuario    ID del usuario del que se quiere buscar los pagos
     * @return array
     */
    public function getPagos(Usuario $usuario = null)
    {
        $pagos  = array();

        if($usuario != null)
        {
            // SQL para cargar todos pagos de un usuario y almacenarlos en el array de $pagos
            foreach ($query->result as $row)
            {
                $pago = new Pago();

                $pago->setCodigoPago($row->codigopago);
                $pago->setImporte($row->importe);
                $pago->setFecha($row->fecha);
                $pago->setUsuario($usuario);

                $pagos[] = $pago;
            }
        }
        else
        {
            /**
             * SQL para cargar todos los pagos en el repositorio
             * El SQL deberia de ser un LEFT JOIN para obtner los ID de los usuarios y poder utilizar el
             * codigo de usuario para asignarselo a cada objeto usuario en el bucle
             */

            // El siguiente codigo es para la carga de todos los pagos en caso  de tener un obj query
            /*
            foreach ($query->result as $row)
            {
                $pago = new Pago();

                $pago->setCodigoPago($row->codigopago);
                $pago->setImporte($row->importe);
                $pago->setFecha($row->fecha);

                $usuario = new Usuario();
                $usuario->buscarUsuario($row->codigousuario);
                $pago->setCodigoUsuario($usuario);

                $pagos[] = $pago;
            }
            */

            // array de demo
            $pago = new Pago();

            $pago->setCodigoPago(123123);
            $pago->setImporte(2999);

            $usuario = new Usuario();
            $pago->setCodigoUsuario(1);
            $pagos[] = $pago;
        }

        return $pagos;
    }
}
