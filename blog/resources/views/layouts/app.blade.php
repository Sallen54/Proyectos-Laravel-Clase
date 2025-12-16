<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Blog')</title>

    {{-- CSS Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .navbar-nav .nav-link.activo {
            font-weight: bold;
            color: #ffc107 !important;
        }
    </style>
</head>
<body>

    {{-- Barra de navegación --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('inicio') }}">Mi Blog</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ setActivo('inicio') }}" href="{{ route('inicio') }}">
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActivo('posts.index') }}" href="{{ route('posts.index') }}">
                            Posts
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Fecha actual --}}
    <div class="container mt-3 text-end">
        <small class="text-muted">
            Fecha actual: {{ fechaActual('d/m/Y') }}
        </small>
    </div>

    {{-- Contenido principal --}}
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    {{-- JS Bootstrap --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
