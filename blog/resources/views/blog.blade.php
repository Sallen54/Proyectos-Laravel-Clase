@extends('layouts.app')

@section('title', 'Blog Principal')

@section('content')
<div class="row">
    <div class="col-md-8">
        <h1 class="mb-4">Blog Principal</h1>

        <!-- Artículo 1 -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Introducción a Laravel</h2>
                <p class="text-muted">
                    <i class="fas fa-calendar-alt mr-1"></i> Publicado: 15 de Marzo, 2024 |
                    <i class="fas fa-user mr-1 ml-2"></i> Autor: Admin
                </p>
                <p class="card-text">
                    Laravel es un framework de PHP elegante y expresivo. Ofrece una sintaxis
                    hermosa y rica en características que simplifica las tareas comunes como
                    autenticación, enrutamiento, sesiones y almacenamiento en caché.
                </p>
                <a href="{{ route('posts_ficha', ['id' => 1]) }}" class="btn btn-primary">
                    Leer más <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Artículo 2 -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Bootstrap en Laravel</h2>
                <p class="text-muted">
                    <i class="fas fa-calendar-alt mr-1"></i> Publicado: 10 de Marzo, 2024 |
                    <i class="fas fa-user mr-1 ml-2"></i> Autor: Desarrollador
                </p>
                <p class="card-text">
                    La integración de Bootstrap con Laravel permite crear interfaces de usuario
                    responsivas y atractivas rápidamente. Con Laravel Mix, puedes compilar tus
                    assets de manera eficiente.
                </p>
                <a href="{{ route('posts_ficha', ['id' => 2]) }}" class="btn btn-primary">
                    Leer más <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Artículo 3 -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Rutas y Controladores</h2>
                <p class="text-muted">
                    <i class="fas fa-calendar-alt mr-1"></i> Publicado: 5 de Marzo, 2024 |
                    <i class="fas fa-user mr-1 ml-2"></i> Autor: Instructor
                </p>
                <p class="card-text">
                    Las rutas en Laravel son increíblemente flexibles. Puedes definir rutas con
                    parámetros, restricciones, middleware y nombres para facilitar su referencia
                    en toda la aplicación.
                </p>
                <a href="{{ route('posts_ficha', ['id' => 3]) }}" class="btn btn-primary">
                    Leer más <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="col-md-4">
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0"><i class="fas fa-info-circle mr-2"></i>Información del Blog</h5>
            </div>
            <div class="card-body">
                <p>Este blog está desarrollado con:</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center">
                        <i class="fas fa-check text-success mr-2"></i> Laravel 8.x
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="fas fa-check text-success mr-2"></i> Bootstrap 4.5
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="fas fa-check text-success mr-2"></i> Blade Templates
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="fas fa-check text-success mr-2"></i> Font Awesome Icons
                    </li>
                </ul>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="fas fa-link mr-2"></i>Enlaces Rápidos</h5>
            </div>
            <div class="card-body">
                <div class="list-group">
                    <a href="{{ route('posts_listado') }}" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="fas fa-list mr-2"></i> Listado Completo de Posts
                    </a>
                    <a href="{{ route('listado') }}" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="fas fa-book mr-2"></i> Listado de Libros
                    </a>
                    <a href="{{ route('fecha') }}" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="fas fa-clock mr-2"></i> Ver Fecha Actual
                    </a>
                    <a href="{{ route('saludo', ['nombre' => 'Visitante', 'id' => 99]) }}"
                       class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="fas fa-hand-wave mr-2"></i> Ejemplo de Saludo
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
