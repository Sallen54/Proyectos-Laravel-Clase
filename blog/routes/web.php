<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/', function () {
    $nombre = "Alejandro";
    return view('inicio')->with('nombre', $nombre);
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

Route::get('/posts/{id}', function ($id) {
    return "Ficha del post {$id}";
})->whereNumber('id')->name('posts_ficha');

Route::get('/posts/{id}', function ($id) {
    return view('posts.ficha', ['id' => $id]);
})->whereNumber('id')->name('posts_ficha');
