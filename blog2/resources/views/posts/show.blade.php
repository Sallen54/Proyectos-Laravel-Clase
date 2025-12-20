@extends('plantilla')

@section('title', $post->titulo)

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">{{ $post->titulo }}</h4>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->contenido }}</p>
            
            <div class="mt-4">
                <h5>Información del post:</h5>
                <ul class="list-unstyled">
                    <li><strong>ID:</strong> {{ $post->id }}</li>
                    <li><strong>Creado:</strong> {{ $post->created_at->format('d/m/Y H:i:s') }}</li>
                    <li><strong>Actualizado:</strong> {{ $post->updated_at->format('d/m/Y H:i:s') }}</li>
                </ul>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('posts.editarPrueba', $post->id) }}" class="btn btn-warning">
                <i class="bi bi-pencil"></i> Editar (prueba)
            </a>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Volver al listado
            </a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar este post?')">
                    <i class="bi bi-trash"></i> Eliminar
                </button>
            </form>
        </div>
    </div>
@endsection