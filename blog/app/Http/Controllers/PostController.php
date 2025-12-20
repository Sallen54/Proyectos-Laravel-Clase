<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        // Temporal: redirigir al listado
        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        // Temporal: redirigir a la ficha
        return redirect()->route('posts.show', $id);
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }

    // Métodos de prueba
    public function nuevoPrueba()
    {
        $numero = rand(1, 1000);
        Post::create([
            'titulo' => 'Título ' . $numero,
            'contenido' => 'Contenido ' . $numero
        ]);
        return redirect()->route('posts.index');
    }

    public function editarPrueba($id)
    {
        $post = Post::findOrFail($id);
        $numero = rand(1, 1000);
        $post->update([
            'titulo' => 'Título Modificado ' . $numero,
            'contenido' => 'Contenido modificado ' . $numero
        ]);
        return redirect()->route('posts.show', $id);
    }
}
