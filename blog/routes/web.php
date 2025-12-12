<?php

use Illuminate\Support\Facades\Route;

// ====================
// SESIÓN 1 - EJERCICIO 1
// ====================

Route::get('/', function () {
    $nombre = "Alejandro";
    return view('inicio')->with('nombre', $nombre);
})->name('inicio');

// Ruta: Listado de posts → nombre: "posts_listado"
Route::get('/posts', function () {
    return view('posts.listado');
})->name('posts_listado');

// Ruta: Ficha de post → nombre: "posts_ficha"
Route::get('/posts/{id}', function ($id) {
    return view('posts.ficha', ['id' => $id]);
})->whereNumber('id')->name('posts_ficha');

// Ruta de prueba con welcome2 (si existe)
Route::get('/welcome2', function () {
    return view('welcome2');
})->name('welcome2');

// ====================
// SESIÓN 2 - RUTAS
// ====================

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

Route::get('listado', function () {
    $libros = array(
        array(
            "titulo" => "El juego de Ender",
            "autor" => "Orson Scott Card"
        ),
        array(
            "titulo" => "La tabla de Flandes",
            "autor" => "Arturo Pérez Reverte"
        ),
        array(
            "titulo" => "La historia interminable",
            "autor" => "Michael Ende"
        ),
        array(
            "titulo" => "El Señor de los Anillos",
            "autor" => "J.R.R. Tolkien"
        )
    );
    return view('listado', compact('libros'));
});
