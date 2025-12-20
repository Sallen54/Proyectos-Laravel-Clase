@extends('layouts.app')

@section('content')
<h1>Listado de Posts</h1>
<ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}">
                {{ $post->titulo }}
            </a>
            
            <!-- Formulario para eliminar el post -->
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>

<!-- Paginación -->
<div>
    {{ $posts->links() }}
</div>
@endsection
