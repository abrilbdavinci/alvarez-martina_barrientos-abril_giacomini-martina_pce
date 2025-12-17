<!-- filepath: resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kälm - Skincare & Haircare' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet">
</head>


<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm px-5 rounded-bottom-4 py-3">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="Kälm logo dark" style="height: 2vw;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ms-auto justify-content-end" id="navbarNav">
            <ul class="navbar-nav fw-semibold d-flex align-items-center">

                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Quiénes somos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('reviews.index') }}">Reseñas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('premium') }}">Premium</a></li>
                @if(auth()->check() && auth()->user()->role === 'admin')
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
                @endif

                {{-- ===========================
                    BOTONES DE AUTH
                ============================ --}}
                @auth
                    <li class="nav-item d-flex align-items-center">
                        <span class="badge bg-secondary ms-2 text-white bg-[#306067] p-2">{{ auth()->user()->role }}</span>
                        <a class="nav-link" href="{{ route('profile.index', auth()->user()) }}">
                            Mi perfil
                        </a>
                    </li>

                    <li class="nav-item ms-3">
                        <form action="{{ url('/cerrar-sesion') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm px-3">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item ms-3">
                        <a href="{{ route('auth.login') }}" class="btn btn-outline-primary btn-sm px-3">
                            Iniciar sesión
                        </a>
                    </li>

                    <li class="nav-item ms-2">
                        <a href="{{ route('auth.register') }}" class="btn btn-primary btn-sm px-3">
                            Registrarse
                        </a>
                    </li>
                @endauth

            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container-fluid grow">
        @if (session()->has('feedback.message'))
            <div class="alert alert-{{ session()->get('feedback.type', 'success') }}">
                {!! session()->get('feedback.message') !!}
            </div>
        @endif
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
                <img style="height: 2vw;" src="{{ asset('images/logolight.svg') }}" alt="Kälm logo">
            </div>
        </div>
    </footer>
</body>
</html>
