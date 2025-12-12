@extends('layouts.app')

@section('title', 'Listado de Libros')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="mb-4">
            <i class="fas fa-book mr-2"></i>Listado de Libros
        </h1>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-info-circle mr-2"></i>Información del Listado
                </h5>
            </div>
            <div class="card-body">
                <p>Este listado muestra cómo pasar datos desde el controlador/ruta a la vista usando el método <code>compact()</code>.</p>
                <p class="mb-0">Total de libros: <span class="badge badge-success">{{ count($libros) }}</span></p>
            </div>
        </div>

        <div class="row">
            @foreach($libros as $index => $libro)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm border-top border-primary">
                    <div class="card-header bg-light">
                        <h5 class="card-title mb-0 text-truncate">{{ $libro['titulo'] }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <strong>Autor:</strong> {{ $libro['autor'] }}
                        </p>
                        <p class="card-text">
                            <small class="text-muted">
                                <i class="fas fa-hashtag mr-1"></i>ID: {{ $index + 1 }}
                            </small>
                        </p>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye mr-1"></i>Ver
                            </button>
                            <button class="btn btn-sm btn-outline-success">
                                <i class="fas fa-shopping-cart mr-1"></i>Comprar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Tabla alternativa -->
        <div class="card shadow-sm mt-4">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-table mr-2"></i>Vista en Tabla
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($libros as $index => $libro)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $libro['titulo'] }}</td>
                                <td>{{ $libro['autor'] }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm btn-info">
                                            <i class="fas fa-info"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
