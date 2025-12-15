<?php

use Illuminate\Support\Facades\Route;


#Route::get('/', function () {
 #   return view('inicio');
#})->name('inicio');

Route::get('/', function () {
    return view('home');
});

// Ruta: Listado de posts → nombre: "posts_listado"
Route::get('/posts', function () {
    return view('posts.listado');
})->name('posts_listado');

// Ruta: Ficha de post → nombre: "posts_ficha"
Route::get('/posts/{id}', function ($id) {
    return view('posts.ficha', ['id' => $id]);
})->whereNumber('id')->name('posts_ficha');

