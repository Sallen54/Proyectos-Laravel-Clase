<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Ejemplo de datos (luego vendrán de la BD)
        $posts = [
            ['id' => 1, 'titulo' => 'Primer post'],
            ['id' => 2, 'titulo' => 'Segundo post'],
        ];
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        return view('posts.show', compact('id'));
    }

    public function create()
    {
        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        return redirect()->route('posts.index');
    }
}
