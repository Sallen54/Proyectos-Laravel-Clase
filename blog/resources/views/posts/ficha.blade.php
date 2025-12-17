@extends('layout.plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de posts</h1>
    <p class="lead">Aquí se mostrarán todos los posts del blog.</p>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Posts disponibles:</h5>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{ route('posts_ficha', ['id' => 1]) }}">Post 1</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('posts_ficha', ['id' => 2]) }}">Post 2</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('posts_ficha', ['id' => 3]) }}">Post 3</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('posts_ficha', ['id' => 4]) }}">Post 4</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('posts_ficha', ['id' => 5]) }}">Post 5</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
