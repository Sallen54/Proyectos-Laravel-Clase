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
        return redirect('/');
    }

    public function edit($id)
    {
        return redirect('/');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

    // Métodos temporales para pruebas
    public function nuevoPrueba()
    {
        $numero = rand(1, 1000);
        Post::create([
            'titulo' => "Título {$numero}",
            'contenido' => "Contenido del post {$numero}"
        ]);
        return redirect()->route('posts.index')->with('success', 'Post de prueba creado');
    }

    public function editarPrueba($id)
    {
        $post = Post::findOrFail($id);
        $numero = rand(1001, 2000);
        $post->update([
            'titulo' => "Título editado {$numero}",
            'contenido' => "Contenido editado {$numero}"
        ]);
        return redirect()->route('posts.index')->with('success', "Post {$id} editado");
    }

    // Placeholder methods
    public function store(Request $request)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }
}