<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Mi Blog Laravel')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Tus estilos personalizados si los tienes -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .main-content {
            min-height: calc(100vh - 120px);
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Incluir barra de navegación -->
        @include('partials.nav')

        <!-- Contenido principal -->
        <main class="py-4 main-content">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-dark text-white py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; {{ date('Y') }} Mi Blog Laravel. Todos los derechos reservados.</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>Desarrollado con Laravel y Bootstrap</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts personalizados -->
    @yield('scripts')
</body>
</html>
