@extends('layout')



@section('title')
Contactanos

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 col-lg-6 mx-auto">
            @include('components.session-status')
            <Form class="bg-white shadow rounded py-3 px-4 text-center" method="POST" action="{{route('contactt')}}" style="margin-top: 10%">
                {{-- obtener seguridad contra los ataques xss --}}
                <h1>Contacto</h1>
                @csrf
                <div class="form-group">
                    <input 
                        class="form-control bg-light shadow-sm"
                        name="name" 
                        placeholder="Nombre" 
                        value={{old('name')}}>
                        {!! $errors->first('name','<small style="color: red">:message</small><br>')!!}<br>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control bg-light shadow-sm"
                    placeholder="Email" value={{old('email')}}>
                {!! $errors->first('email','<small style="color: red">:message</small><br>')!!}<br>
                </div>

                <div class="form-group">
                    <input name="subject" class="form-control bg-light shadow-sm"
                    placeholder="Asunto" value={{old('subject')}}>
                {!! $errors->first('subject','<small style="color: red">:message</small><br>')!!}<br>
                </div>


                <div class="form-group">
                    <textarea name="content" class="form-control bg-light shadow-sm"
                    placeholder="Mensaje" value={{old('content')}}></textarea>
                {!! $errors->first('content','<small style="color: red">:message</small><br><br>')!!}<br>
                </div>
            

                <Button class="btn-dark rounded btn-lg w-100 ">Enviar</Button>
            </Form>  
        </div>
        
    </div>

</div>
   
@endsection