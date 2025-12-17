<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::resource('posts', PostController::class)
    ->only(['index', 'show', 'create', 'edit']);

Route::get('/test-helper', function() {
    dd([
        'setActivo_exists' => function_exists('setActivo'),
        'fechaActual_exists' => function_exists('fechaActual'),
        'fechaActual_test' => fechaActual('d/m/Y H:i:s')
    ]);
});
