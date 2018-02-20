@section('cuadrado_titulo')

      <h1>Cuadrado</h1>
@endsection
@section('cuadrado_datos')
      <ul>

        <li>Tipo: {{ $cuadrado->getTipo() }}</li>
        <li>Area: {{ $cuadrado->getArea() }}</li>
        <li>Superficie: {{ $cuadrado->getSuperficie() }}</li>
        <li>Base: {{ $cuadrado->getBase() }}</li>
        <li>Altura: {{ $cuadrado->getAltura() }}</li>
        <li>Diametro: {{ $cuadrado->getDiametro() }}</li>
      </ul>
@endsection
@section('circulo_titulo')
      <h1>Circulo</h1>
@endsection
@section('circulo_datos')
      <ul>
        <li>Tipo: {{ $circulo->getTipo() }}</li>
        <li>Area: {{ $circulo->getArea() }}</li>
        <li>Superficie: {{ $circulo->getSuperficie() }}</li>
        <li>Base: {{ $circulo->getBase() }}</li>
        <li>Altura: {{ $circulo->getAltura() }}</li>
        <li>Diametro: {{ $circulo->getDiametro() }}</li>
      </ul>
@endsection
@section('triangulo_titulo')
      <h1>Triangulo</h1>
@endsection
@section('triangulo_datos')
      <ul>
        <li>Tipo: {{ $triangulo->getTipo() }}</li>
        <li>Area: {{ $triangulo->getArea() }}</li>
        <li>Superficie: {{ $triangulo->getSuperficie() }}</li>
        <li>Base: {{ $triangulo->getBase() }}</li>
        <li>Altura: {{ $triangulo->getAltura() }}</li>
        <li>Diametro: {{ $triangulo->getDiametro() }}</li>
      </ul>
    </div>
@endsection
