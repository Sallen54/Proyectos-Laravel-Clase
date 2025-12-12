@extends('layouts.app')

@section('title', 'Inicio - Mi Blog')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="jumbotron bg-light border">
            <h1 class="display-4">¡Bienvenido al Blog!</h1>
            <p class="lead">Un blog desarrollado con Laravel y Bootstrap para demostrar las capacidades del framework.</p>
            <hr class="my-4">
            <p>Explora nuestras secciones y descubre todas las funcionalidades implementadas.</p>
            <div class="mt-4">
                <a class="btn btn-primary btn-lg mr-2" href="{{ route('posts_listado') }}" role="button">
                    <i class="fas fa-newspaper mr-1"></i> Ver Posts
                </a>
                <a class="btn btn-outline-secondary btn-lg mr-2" href="{{ route('blog') }}" role="button">
                    <i class="fas fa-book-open mr-1"></i> Ir al Blog
                </a>
                <a class="btn btn-outline-success btn-lg" href="{{ route('listado') }}" role="button">
                    <i class="fas fa-book mr-1"></i> Ver Libros
                </a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-primary">
                    <div class="card-body text-center">
                        <i class="fas fa-route fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Rutas Dinámicas</h5>
                        <p class="card-text">Gestiona rutas con parámetros opcionales y restricciones.</p>
                        <a href="{{ route('saludo', ['nombre' => 'Visitante', 'id' => 100]) }}"
                           class="btn btn-outline-primary">Probar Ruta</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-success">
                    <div class="card-body text-center">
                        <i class="fas fa-eye fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Vistas Blade</h5>
                        <p class="card-text">Plantillas con herencia, secciones y componentes reutilizables.</p>
                        <a href="{{ route('contacto') }}" class="btn btn-outline-success">Ver Contacto</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-warning">
                    <div class="card-body text-center">
                        <i class="fas fa-palette fa-3x text-warning mb-3"></i>
                        <h5 class="card-title">Bootstrap 4.5</h5>
                        <p class="card-text">Diseño responsivo con el framework CSS más popular.</p>
                        <a href="{{ route('welcome2') }}" class="btn btn-outline-warning">Ver Estilos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
