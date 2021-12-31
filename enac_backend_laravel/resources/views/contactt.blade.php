@extends('layout')



@section('title')
Contactanos

@endsection

@section('content')
    <h1>estoy en la pagina de contacto</h1>
    <Form method="POST" action="{{route('contactt')}}">
        {{-- obtener seguridad contra los ataques xss --}}
        @csrf
        <input name="name" placeholder="Nombre" value={{old('name')}}><br>
        {!! $errors->first('name','<small>:message</small><br>')!!}

        <input name="email" type="email" placeholder="Email" value={{old('email')}}><br>
        {!! $errors->first('email','<small>:message</small><br>')!!}

        <input name="subject" placeholder="Asunto" value={{old('subject')}}><br>
        {!! $errors->first('subject','<small>:message</small><br>')!!}

        <textarea name="content" placeholder="Mensaje" value={{old('content')}}></textarea><br>
        {!! $errors->first('content','<small>:message</small><br><br>')!!}

        <Button>Enviar</Button>
    </Form>
@endsection