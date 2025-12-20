@extends('layouts.app')

@section('content')
<h1>{{ $post->titulo }}</h1>
<p>{{ $post->contenido }}</p>
<p><small>Creado: {{ $post->created_at->format('d/m/Y H:i') }}</small></p>

<a href="{{ route('posts.index') }}">Volver al listado</a>
@endsection
