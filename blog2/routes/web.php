<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('inicio');
});

Route::resource('posts', PostController::class)->only([
    'index', 'show', 'create', 'edit'
]);