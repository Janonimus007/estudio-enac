
@extends('layout')
@section('content')
<h1>{{$proyect->title}}</h1>
<p> creado hace {{$proyect->created_at->diffForHumans()}}</p>
<a href="{{route('edit',$proyect)}}"> Editar proyecto</a>
<form method="POST" action="{{route('destroy',$proyect)}}">
    @csrf @method('DELETE')
    <button>Eliminar proyecto</button>
</form>
@endsection
