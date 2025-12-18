<?php
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts */
?>

<x-layout>
    <x-slot:title>Listado de Posts</x-slot:title>

    <div class="container my-5">

        <!-- Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div>
                <h1 class="fw-bold mb-1">Posts</h1>
                <p class="text-muted small mb-0">
                    Listado general de publicaciones
                </p>
            </div>

            @auth
                @if (auth()->user()->role === 'premium' || auth()->user()->role === 'admin')
                    <a href="{{ route('posts.create') }}" class="btn btn-primary rounded-pill px-4 mt-3 mt-md-0">
                        Crear Post
                    </a>
                @else
                    <span class="badge bg-warning text-dark px-3 py-2 mt-3 mt-md-0">
                        Debes ser Premium para crear posts
                    </span>
                @endif
            @endauth
        </div>

        <!-- Cards -->
        <div class="row g-4">
            @foreach ($posts as $post)
                @php
                    $user = auth()->user();
                    $isAdmin = $user && $user->role === 'admin';
                @endphp

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card h-100 shadow border-0 rounded-4 d-flex flex-column">

                        <div class="card-body d-flex flex-column">
                            <!-- Categoría -->
                            <span class="badge bg-secondary-subtle text-secondary fw-normal align-self-start mb-2">
                                {{ $post->category }}
                            </span>

                            <!-- Título -->
                            <h5 class="fw-bold mb-2">
                                {{ $post->title }}
                            </h5>

                            <!-- Autor -->
                            <p class="text-muted small mb-4">
                                Por {{ $post->author }}
                            </p>

                            <!-- Acciones -->
                            <div class="mt-auto d-flex flex-wrap gap-2">
                                {{-- Todos pueden ver --}}
                                <a href="{{ route('posts.view', $post) }}"
                                    class="btn btn-info btn-sm rounded-pill flex-grow-1">
                                    Ver
                                </a>

                                {{-- Solo Admin puede editar --}}
                                @if ($isAdmin)
                                    <a href="{{ route('posts.edit', $post) }}"
                                        class="btn btn-secondary btn-sm rounded-pill flex-grow-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                        class="flex-grow-1" onsubmit="return confirm('¿Desea eliminar este post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill w-100">
                                            Eliminar
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
</x-layout>
