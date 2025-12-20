<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show($id)
    {
        return view('posts.show', ['id' => $id]);
    }

    public function create()
    {
        return redirect('/');
    }

    public function edit($id)
    {
        return redirect('/');
    }

    // Estos métodos son requeridos por el controlador de recursos
    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}