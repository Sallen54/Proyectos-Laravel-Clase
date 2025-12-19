<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">
            <i class="fas fa-blog mr-2"></i>Mi Blog Laravel
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->routeIs('inicio') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('inicio') }}">
                        <i class="fas fa-home mr-1"></i> Inicio
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('posts_listado') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('posts_listado') }}">
                        <i class="fas fa-newspaper mr-1"></i> Posts
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog') }}">
                        <i class="fas fa-book-open mr-1"></i> Blog
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('listado') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('listado') }}">
                        <i class="fas fa-book mr-1"></i> Libros
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('contacto') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contacto') }}">
                        <i class="fas fa-envelope mr-1"></i> Contacto
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fecha') }}">
                        <i class="fas fa-clock mr-1"></i> Ver Fecha
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown">
                        <i class="fas fa-user mr-1"></i> Usuario
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('saludo', ['nombre' => 'Juan', 'id' => 1]) }}">
                            Saludar a Juan
                        </a>
                        <a class="dropdown-item" href="{{ route('saludo', ['nombre' => 'Ana', 'id' => 2]) }}">
                            Saludar a Ana
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cog mr-1"></i> Configuración
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
