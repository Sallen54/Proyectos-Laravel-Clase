<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
#ruta sesion 1
Route::get('/posts', function () {
    return 'Listado de posts';
});

#rutas sesion 2
Route::get('fecha', function () {
    return date("d/m/y h:i:s");
});

Route::get(
    'saludo/{nombre?}/{id?}',
    function ($nombre = "Invitado", $id = 0) {
        return "Hola $nombre, tu código es el $id";
    }
)->where('nombre', "[A-Za-z]+")
    ->where('id', "[0-9]+")
    ->name('saludo');

Route::get('contacto', function () {
    return "Página de contacto";
})->name('ruta_contacto');

