<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','titulo por defecto')</title>
    <style>
        .active a{
            color:red;
            text-decoration: none;
        }
    </style>
</head>
<body>
   @include('components.navbar')
    {{-- <h1>Hola desde el inicio</h1> --}}
    {{-- Bienvenid@ --}}
    {{-- como usar blade para imprimir codigo o una variable --}}
    {{-- Bienvenid@ {{$nombre ?? 'Invitado'}} --}}
    @yield('content'){{--me permite tener un contenido dinamico--}}
</body>
</html>