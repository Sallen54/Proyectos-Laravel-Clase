<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Mi Blog que lleva a Inicio -->
        <a class="navbar-brand" href="/">Mi Blog</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Inicio que lleva a página principal -->
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                
                <!-- Listado que lleva a posts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">Listado de posts</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>