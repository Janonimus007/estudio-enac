@extends('layout')

@section('content')
    <h1>estoy en el portfolio</h1>
    <ul>
        @forelse($portfolio as $portfolioItem)
        <a href="{{route('portfolio.show',$portfolioItem->id)}}">
            <li> {{$portfolioItem->title}}</li>
        </a>
        <li> {{$portfolioItem->description}}</li><br>

            @empty
                <li>No hay proyectos para mostrar</li>
        @endforelse
        {{$portfolio->links()}}
    </ul>
    @include('components.session-status')
@endsection

@section('title')
Portafolio
@endsection