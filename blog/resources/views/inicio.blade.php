@extends('layout.plantilla')

@section('titulo', 'Inicio - Blog Laravel')

@section('contenido')
    <div class="text-center">
        <h1 class="display-4">¡Bienvenido/a {{ $nombre }}!</h1>
        <p class="lead">Un blog desarrollado con Laravel y Bootstrap.</p>

        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Listado de posts</h5>
                        <p class="card-text">Consulta todos los posts disponibles en nuestro blog.</p>
                        <a href="{{ route('posts_listado') }}" class="btn btn-primary">Ver posts</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Navegación</h5>
                        <p class="card-text">Usa la barra de navegación superior para moverte por el sitio.</p>
                        <div class="d-grid gap-2">
                            <a href="{{ route('inicio') }}" class="btn btn-outline-primary">Inicio</a>
                            <a href="{{ route('posts_listado') }}" class="btn btn-outline-primary">Listado</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ejemplo de post</h5>
                        <p class="card-text">Visita la ficha de un post de ejemplo.</p>
                        <a href="{{ route('posts_ficha', ['id' => 1]) }}" class="btn btn-success">Ver post 1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
