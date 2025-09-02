<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola a todos";
})->name('home');

Route::get('contactanos', function() { //Ruta con nombre referenciado
    return "Hola desde contacto";
})->name('contactos');
  
Route::get('saludo/{nombre}', function($nombre){ //Ruta con parametro
    return "Saludos " . $nombre;
});

Route::get('saludo2/{nombre?}', function($nombre = "Invitado"){ //Ruta con parametro vacio
    return "Saludos " . $nombre;
});

Route::get('/', function(){
    echo "<a href='". route('contactos') . "'>Contactos 1<a/><br>"; //Hacemos referencia a las rutas a tra vez del nombre de la ruta y no de la ruta en si
    echo "<a href='". route('contactos') . "'>Contactos 2<a/><br>";
    echo "<a href='". route('contactos') . "'>Contactos 3<a/><br>";
    echo "<a href='". route('contactos') . "'>Contactos 4<a/><br>";
    echo "<a href='". route('contactos') . "'>Contactos 5<a/><br>"; 
});

Route::get('/', function () {
    return view('home',['name' => 'Victor Jimarez']);
})->name('home');

Route::view('/','home')->name('home');
Route::view('/about' , 'about')->name('about');
Route::view('/portafolio' , 'portafolio')->name('portafolio');
Route::view('/contact' , 'contact')->name('contact');