<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'titulo' => 'Primer post', 'contenido' => 'Contenido del primer post'],
            ['id' => 2, 'titulo' => 'Segundo post', 'contenido' => 'Contenido del segundo post'],
            ['id' => 3, 'titulo' => 'Tercer post', 'contenido' => 'Contenido del tercer post'],
        ];
        
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = ['id' => $id, 'titulo' => "Post $id", 'contenido' => "Contenido del post $id"];
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        // EJERCICIO 2: Redirigir al inicio
        return redirect()->route('posts.index')
            ->with('mensaje', 'Redirigido desde creación de post');
    }

    public function edit($id)
    {
        // EJERCICIO 2: Redirigir a la ficha del post
        return redirect()->route('posts.show', $id)
            ->with('mensaje', 'Redirigido desde edición de post');
    }
}
