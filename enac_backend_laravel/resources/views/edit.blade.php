@extends('layout')
@section('content')
<h1>Editar proyecto</h1>
@include('components.validation-errors')
@include('components.session-status')
<form method="POST" action="{{route('update',$proyect)}}">
    @csrf @method('PATCH')
    <label>Nuevo Titulo del proyecto</label>
    <input type="text" name="title" value="{{old('title',$proyect->title)}}"><br>
    <label>Nueva Descripcion del proyecto</label>
    <input type="text" name="description" value="{{old('description',$proyect->description)}}"><br>
    <button>Actualizar formulario</button>
</form>
 
@endsection
