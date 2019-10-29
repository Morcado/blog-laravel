@extends('layot.app')

@section('title', 'servicios')

@section('content')
    
<h1>Pagina de servcios</h1>
<p>Soy un servicio</p>
<p>hola</p>
<!-- Recibe la informacion con el metodo de php -->
<!-- <p>Servicio con id = <?php echo $idVista; ?> and costo = <?php echo $costoVista; ?></p> -->


<p>Servicio con id = {{$idVista}} and costo = {{$costoVista}} </p>

@if (count($services) > 0) 
    <h2>Nuestros servicios</h2>
    <ul class="list-group">
        @foreach ($services as $item)
            <li class="list-group-item">{{$item}}</li>
        @endforeach
    </ul>
@endif

@endsection
