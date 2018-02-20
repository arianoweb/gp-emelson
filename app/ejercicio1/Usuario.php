<?php

namespace Geopagos\ejercicio1;

/**
 * Clase Usuario para el registro, modificado y eliminado de usuarios, como favoritos
 * @version: 0.1
 * @Creado: 25 de abril del 2017
 * @Modificado: 25 de abril del 2017
 * @autor: Wilhelm
 */

use Geopagos\Clases\Pago as Pago;

class Usuario
{
    private $codigoUsuario;
    private $clave;
    private $edad;
    private $favoritos;
    private $pagos;
    private $nombreUsuario;

    public function __construct()
    {
        $this->codigoUsuario = 0;
        $this->favoritos = array();
        $this->pagos = array();
    }

    public function getCodigoUsuario()
    {
		    return $this->codigoUsuario;
	  }

	  public function setCodigoUsuario($codigoUsuario)
    {
        $this->codigoUsuario = $codigoUsuario;
    }

	  public function getUsuario()
    {
		    return $this->nombreUsuario;
	  }

	  public function setUsuario($nombreUsuario)
    {
		    $this->nombreUsuario = $nombreUsuario;
	  }

	  public function getClave()
    {
		    return $this->clave;
	  }

	  public function setClave($clave)
    {
  		  $this->clave = $clave;
  	}

	  public function getEdad()
    {
		    return $this->edad;
	  }

  	public function setEdad($edad)
    {
  		  $this->edad = $edad;
  	}

  	public function getFavoritos()
    {
  		  return $this->favoritos;
  	}

  	public function setFavoritos($favoritos)
    {
  		  $this->favoritos = $favoritos;
  	}

  	public function getPagos()
    {
  		  return $this->pagos;
  	}

  	public function setPagos($pagos)
    {
  		$this->pagos = $pagos;
  	}

    /**
     * Almacena la informacion de usuario en el repositorio de datos, si al llamarse este metodo
     * el objeto tiene un codigo de usuario la data del mismo sera actializada en el repositorio
     * en caso que sea 0 se creara un nuevo registro en el repositorio con la data del objeto
     * @return boolean
     */
    public function guardar()
    {
        /**
         * validar que el valor de usuario no sea vacio
         * validar que el valor de clave no sea vacio
         * validar que la edad sea mayor a 18 anios
         */
        if( empty($this->nombreUsuario) || empty($this->clave) || $this->edad < 19 )
        {
            return false;
        }
        else
        {
            if ($this->codigoUsuario > 0)
            {
                // SQL para actualizar el objeto creado
                return true;
            }
            else
            {
                // SQL para crear un usuario nuevo
                $this->codigoUsuario = 1; // Valor de prueba
                return true;
            }
        }
    }

    /**
     * Elimina el usuario del repositorio segun el id que contenga el objeto instanciado
     * el objeto tiene un codigo de usuario la data del mismo sera actializada en el repositorio
     * en caso qe sea 0 ser creara un nuevo registro en el repositorio con la data del objeto
     * @return boolean
     */
    public function eliminar()
    {
        if($this->codigoUsuario > 0 && is_numeric($this->codigoUsuario))
        {
            // SQL para eliminar el usuario y sus referencias
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Almacena en la tabla Favoritos la relacion entre el id del objeto instanciado y
     * el id pasado como parametro y se actuzaliza el array de favoritos del objeto
     * @param  int      $idFavorito         ID del usuario a asociar
     * @return boolean
     */
    public function guardarFavorito($idFavorito = 0)
    {
        if($this->codigoUsuario > 0 && $idFavorito > 0)
        {
            // SQL para asociar los ids en la tabla Favoritos

            // Agregar al array de favoritos en el objeto el nuevo ID
            $this->favoritos[] = $idFavorito;
            return true; // O ID favorito
        }
        else
        {
            return false;
        }
    }

    /**
     * Elimina la relacion Favoritos la relacion entre el id del objeto instanciado y
     * el id pasado como parametro y se actuzaliza el array de favoritos del objeto
     * @param  int      $idFavorito         ID del usuario a asociar
     * @return boolean
     */
    public function eliminarFavorito($idFavorito = 0)
    {
        if($this->codigoUsuario > 0 && $idFavorito > 0)
        {
            // SQL para eliminar la relacion de los ids en la tabla Favoritos

            // refrescar el array de favoritos del objeto
            $nuevoArray = array();
            foreach($this->favoritos as $favorito)
            {
                if($favorito != $idFavorito)
                {
                    $nuevoArray[] = $favorito;
                }
            }

            $this->favoritos = $nuevoArray;

            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Busca todos los usuarios favoritos del id del Objeto instanciado y
     * los guarda en la variable $favoritos
     * @return void
     */
    public function buscarFavoritos()
    {
        /**
         * SQL para buscar todos los favoritos del usuarios se gun el codigo de usuario del objeto instanciado
         * y agregarlos en el array $favoritos de l objeto instanciado
         */

         $favoritos = array();

         foreach ($query->result as $row)
         {
             $this->favoritos[] = $row->codigoUsuario;
         }

         $this->favoritos = $favoritos;
    }

    /**
     * Intancia un objeto de la clase Pago y a traves del metodo getPagos
     * busca todos los pagos del id del Objeto instanciado y los guarda en la variable $pagos
     * @return void
     */
    public function buscarPagos()
    {
        $pago = new Pago();
        $this->pagos = $pago->getPagos($this->codigoUsuario);
    }

    public function alamacenarPago(Pago $pago)
    {
        $this->pagos[] = $pago;
    }
}
