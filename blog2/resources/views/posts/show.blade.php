@extends('plantilla')

@section('title', 'Ficha post')

@section('content')
    <h1>Ficha del post {{ $id }}</h1>
    <p>Contenido del post {{ $id }}...</p>
@endsection