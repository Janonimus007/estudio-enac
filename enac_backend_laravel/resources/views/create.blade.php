@extends('layout')
@section('content')
<h1>Crear proyecto</h1>
@include('components.validation-errors')
<form method="POST" action="{{route('store')}}">
    @csrf
    <label>Titulo del proyecto</label>
    <input type="text" name="title"><br>
    <label>Descripcion del proyecto</label>
    <input type="text" name="description"><br>
    <button>Crear formulario</button>
</form>

@endsection
