<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Cambiar datos de prueba por consulta real a la base de datos
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        // Cambiar dato de prueba por consulta real
        $post = Post::findOrFail($id);
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

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
        
    }

   
    public function store(Request $request)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function nuevoPrueba()
    {
        $numero = rand(1, 1000);
        
        Post::create([
            'titulo' => 'Título ' . $numero,
            'contenido' => 'Contenido del post ' . $numero
        ]);
        
        return redirect()->route('posts.index')
            ->with('success', 'Post de prueba creado correctamente');
    }

    public function editarPrueba($id)
    {
        $post = Post::findOrFail($id);
        $numero = rand(1, 1000);
        
        $post->update([
            'titulo' => 'Título Modificado ' . $numero,
            'contenido' => 'Contenido modificado ' . $numero
        ]);
        
        return redirect()->route('posts.show', $id)
            ->with('success', 'Post de prueba modificado correctamente');
    }
}