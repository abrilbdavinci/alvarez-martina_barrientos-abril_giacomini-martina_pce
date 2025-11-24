<!-- filepath: resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kälm - Skincare & Haircare' }}</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- google fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm px-5 rounded-bottom-4 py-3">
            <a href="{{ route('home') }}"><img src="https://files.catbox.moe/8sp5ze.svg" alt="Kälm logo dark" style="height: 2vw;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Aquí movemos todo a la derecha -->
            <div class="collapse navbar-collapse ms-auto justify-content-end" id="navbarNav">
                <ul class="navbar-nav fw-semibold d-flex align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Quiénes somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reviews.index') }}">Reseñas</a></li>

                    <!-- Icono del carrito -->
                    <li class="nav-item ms-2">
                        <a href="#" class="nav-link position-relative">
                            <i class="fa-solid fa-cart-shopping fa-md"></i>
                        </a>
                    </li>
                </ul>
            </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container-fluid flex-grow-1 py-4">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer style="background-color: #306067;" class="text-white text-center py-3 mt-auto rounded-top-5 px-4 pt-5">
        <div class="d-flex justify-content-between flex-wrap">
            <div>
                <ul style="list-style:none;" class="text-start p-0 m-0">
                    <li><a class="text-white text-decoration-none" href="{{ route('home') }}">Inicio</a></li>
                    <li><a class="text-white text-decoration-none" href="{{ route('posts.index') }}">Posts</a></li>
                    <li><a class="text-white text-decoration-none" href="{{ route('products.index') }}">Productos</a></li>
                    <li><a class="text-white text-decoration-none" href="{{ route('reviews.index') }}">Reseñas</a></li>
                </ul>
                <p class="mt-3">&copy; {{ date('Y') }} Kälm. All rights reserved.</p>
            </div>
            <div class="text-end d-flex flex-column align-items-end flex-wrap">
                <img style="height: 2vw;" src="https://files.catbox.moe/g9rtvz.svg" alt="Kälm logo">
                <p class="mt-3">Escuela Da Vinci - DWM4AP</p>
                <p>Clientes Web Mobile, Parcial 1. Alvarez, Barrientos, Giacomini</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
