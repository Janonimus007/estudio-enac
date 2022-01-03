<?php

//aprendiblecom = Route::get('/', function)
//aprendiblecom/contacto = Route::get('contacto', function)

Route::get('/',function(){
    return "hola desde la pagina de inicio";
});


Route::get('contacto',function(){
    return "hola desde la pagina de contacto";
});


// route::post()             para el envio de formularios

//funcion con pase de parametros
Route::get('saludo/{nombre?}',function($nombre = 'invitado'){//para no hacer un parametro obligatorio se le pone el signo de interrogacion
    return "Saludos " . $nombre;
});

//como llamar a una funcion sin importar que cambie la url

Route::get('contactame',function(){
    return 'seccion de contactos';
})->name('contactos');

Route::get('/home',function(){
     echo "<a href ='" . route('contactos') . "'>contactos </a><br>";
     echo "<a href ='" . route('contactos') . "'>contactos </a><br>";
     echo "<a href ='" . route('contactos') . "'>contactos </a><br>";
     echo "<a href ='" . route('contactos') . "'>contactos </a><br>";
     echo "<a href ='" . route('contactos') . "'>contactos </a><br>";
});


//RETORNANDO VISTAS
Route::get('/laravel',function(){//esta es una forma de mostrar la vista
    return view('welcome');
})->name('laravel');



// enviando parametros a las vistas
Route::get('/inicio',function(){
    $nombre='alejandro';
    return view('home',['nombre'=> $nombre]);
})->name('inicio');

//definiendo uin array de envio


//retornar una vista de una manera reducida
// Route::view('/','home')->('home'); con esta simple linea traigo la vista(se usa para paginas con poca logica)
Route::view('/about','about')->name('about');
Route::get('/portfolio','App\Http\Controllers\PortfolioController@index')->name('portfolio');
Route::get('/portfolio/crear','App\Http\Controllers\PortfolioController@create')->name('create');
Route::patch('/portfolio/{proyect}','App\Http\Controllers\PortfolioController@update')->name('update');
Route::get('/portfolio/{proyect}/editar','App\Http\Controllers\PortfolioController@edit')->name('edit');



Route::post('/portfolio','App\Http\Controllers\PortfolioController@store')->name('store');

Route::delete('/portfolio/{proyect}','App\Http\Controllers\PortfolioController@destroy')->name('destroy');

Route::get('/portfolio/{id}','App\Http\Controllers\PortfolioController@show')->name('portfolio.show');

Route::view('/contactt','contactt')->name('contactt');

Route::post('contactt','App\Http\Controllers\MessagesController@store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
