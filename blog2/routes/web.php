<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('inicio');
});

// Rutas temporales para pruebas - DEBEN TENER NOMBRE
Route::get('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba'])
    ->name('posts.nuevoPrueba');
    
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba'])
    ->name('posts.editarPrueba');

// Rutas de recursos (tienen nombres automáticos)
Route::resource('posts', PostController::class);