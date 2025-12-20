<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Blog Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    
    <div class="container mt-4">
        <div class="text-end mb-3">
            <small class="text-muted">{{ fechaActual('d/m/Y') }}</small>
        </div>
        
        @yield('content')
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>