<?php

namespace Geopagos\Http\Controllers;

use Illuminate\Http\Request;
use Geopagos\ejercicio2\FFactory as FFactory;
use Geopagos\ejercicio1\Pago as Pago;
use Geopagos\ejercicio1\Usuario as Usuario;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $circulo = FFactory::crear('circulo', 30);
        // dd($circulo->getArea());

        $triangulo = FFactory::crear('triangulo', 0, 0, 30, 80);
        // dd($triangulo->getArea());

        $cuadrado = FFactory::crear('cuadrado', 0, 90);
        // dd($cuadrado->getArea());

/***************************************************/

/* Simulación controlada para el ejercicio n° 1*/


/***************************************************/
$usuario = new Usuario();
$usuario->setUsuario('Usuario 1');
$usuario->setCodigoUsuario(rand());
$usuario->setClave('helloworld!');
$usuario->setEdad(18);
$pago = new Pago();
$pago->setCodigoPago(rand());
$pago->setImporte(0);
$diaPago = '2018-01-30';
$pago->setFecha($diaPago);
$pago->setUsuario($usuario);
$otroPago = new Pago();
$otroPago->setCodigoPago(rand());
$otroPago->setImporte(2000);
$diaPago = date('Y-m-d');
$otroPago->setFecha($diaPago);
$otroPago->setUsuario($usuario);

/* Retornar Valores para el ejercicio N° 1 y N° 2*/

return view('welcome', array(
  'circulo' => $circulo,
  'triangulo' => $triangulo,
  'cuadrado' => $cuadrado,
   'usuario' => $usuario,
   'pago'=> $pago,
   'otroPago' => $otroPago));


}



//////////////////////////////////////////////////////







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
