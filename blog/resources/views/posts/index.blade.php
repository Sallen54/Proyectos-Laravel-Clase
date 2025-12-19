@extends('layouts.app')

@section('content')
<h1>Listado de Posts</h1>
<ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post['id']) }}">
                {{ $post['titulo'] }}
            </a>
        </li>
    @endforeach
</ul>
@endsection