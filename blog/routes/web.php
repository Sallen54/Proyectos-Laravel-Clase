<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('inicio');

// Rutas de prueba primero
Route::get('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba']);
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba']);

// Después el resource
Route::resource('posts', PostController::class);