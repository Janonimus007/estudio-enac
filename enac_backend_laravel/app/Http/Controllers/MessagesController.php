<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request){
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ],[
            'name.required'=>'Se necesita su nombre',
            'email.required'=>'Su email es requerido',
            'subject.required'=>'Su asunto es obligatorio',
            'content.required'=>'el contenido es obligatorio',
        ]);
        return request();

      
    }
}
