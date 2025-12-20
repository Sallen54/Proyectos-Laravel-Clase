@extends('plantilla')

@section('title', 'Listado de posts')

@section('content')
    <h1 class="mb-4">Listado de posts</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if($posts->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Creado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->titulo }}</td>
                            <td>{{ $post->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye"></i> Ver
                                </a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este post?')">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    @else
        <div class="alert alert-info">
            No hay posts disponibles. 
            <a href="{{ route('posts.nuevoPrueba') }}">Crear post de prueba</a>
        </div>
    @endif
    
    <div class="mt-4">
        <a href="{{ route('posts.nuevoPrueba') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Crear post de prueba
        </a>
    </div>
@endsection