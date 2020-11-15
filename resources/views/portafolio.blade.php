
@extends('layout') 

@section('title', 'Portafolio')

<!-- Por parametro recibe el nombre de donde vamos a insertar en esta section -->
@section('content')
    <h1>Portafolio</h1>

    <!-- List vetical -->
    <ul>
            @forelse($portafolio as $portafolioItem)
                <li>{{ $portafolioItem['title'] }}<li>
            @empty
                <li>No hay proyectos para mostrar</li>
            @endforelse
            
    </ul>
    
@endsection