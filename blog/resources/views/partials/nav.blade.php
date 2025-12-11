<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">Blog Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}">Página de inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts_listado') }}">Listado de posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
