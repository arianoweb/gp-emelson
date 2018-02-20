

@if(!$usuario->guardar())

    {{$usuario->setEdad(19)}}
@endif



@section('usuarios')
@if($usuario->guardar())
    <b>Alerta</b>:Se realizo un intento de Guardar al usuario pero se encontro que tiene
    edad menor o igual a 18 años se corregio para seguir con la simulación.<br><br>
    <b>Codigo: </b>{{$usuario->getCodigoUsuario()}}<br>
    <b>Nombre: </b>{{$usuario->getUsuario()}}<br>
    <b>Clave: </b>{{$usuario->getClave()}}<br>
    <b>Edad: </b>{{$usuario->getEdad()}}<br>


    @foreach($usuario->getFavoritos() as $favorito)
        'Favorito ID: ' . {{$favorito}}<br>
    @endforeach

@endif
@endsection



@section('pago')
<b>Codigo de Pago: </b>{{$pago->getCodigoPago()}}<br>
<b>Importe: </b>{{$pago->getImporte()}}<br>
<b>Fecha de Importe: </b>{{$pago->getFecha()}}<br>
<b>Datos de Usuario: </b>{{$pago->usuario->getUsuario()}}<br>

<b>Mensaje:</b><br>Se abonara un Importe de $1000 con el Codigo: <b>{{$pago->getCodigoPago()}}</b> al Usuario: <b>{{$pago->usuario->getUsuario()}}</b>.<br><br>

    @if(!$pago->guardar())
        {{$pago->setImporte(1000)}}
    @endif
    <b>Codigo de Pago: </b>{{$pago->getCodigoPago()}}<br>
    <b>Importe: </b>{{$pago->getImporte()}}<br>
    <b>Fecha de Importe: </b>{{$pago->getFecha()}}<br>
    <b>Datos de Usuario: </b>{{$pago->usuario->getUsuario()}}<br><br>


    {{$otroPago->setImporte(3000)}}



    @if(!$otroPago->guardar())
        {{$diaPago = date('Y-m-d')}}
        {{$otroPago->setFecha($diaPago)}}
     @endif

     <b>Codigo de Pago 2: </b>{{$otroPago->getCodigoPago()}}<br>
     <b>Importe: </b>{{$otroPago->getImporte()}}<br>
     <b>Fecha de Importe: </b>{{$otroPago->getFecha()}}<br>
     <b>Datos de Usuario: </b>{{$otroPago->usuario->getUsuario()}}<br>

@endsection
