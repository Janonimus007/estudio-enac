@extends('layout')

@section('content')
    <h1>estoy en el portfolio</h1>
    <ul>
        @forelse($portfolio as $portfolioItem)
            <li> {{$portfolioItem['title']}}</li>
            @empty
                <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>
@endsection

@section('title')
Portafolio
@endsection