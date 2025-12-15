@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <h1 class="mb-4">Bienvenido a Mi Blog</h1>

            <p class="lead">
                Este es un blog desarrollado con Laravel y Bootstrap.
                Aquí encontrarás artículos, noticias y contenido relacionado
                con el desarrollo web.
            </p>

            <hr class="my-4">

            <p>
                Navega por el menú superior para acceder a los posts
                y descubrir todo el contenido disponible.
            </p>

            <a href="#" class="btn btn-primary mt-3">
                Ver Posts
            </a>
        </div>
    </div>
</div>
@endsection
