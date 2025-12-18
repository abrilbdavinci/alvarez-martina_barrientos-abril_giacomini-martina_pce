<!-- resources/views/reviews/index.blade.php -->

<x-layout>
    <x-slot:title>Reseñas de Productos</x-slot:title>

    <div class="container my-5">

        <!-- Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div>
                <h1 class="fw-bold mb-1">Reseñas de Productos</h1>
                <p class="text-muted small mb-0">
                    Opiniones reales de quienes ya probaron los productos
                </p>
            </div>

            <a href="{{ route('reviews.create') }}"
               class="btn btn-primary rounded-pill px-4 mt-3 mt-md-0">
                Crear Reseña
            </a>
        </div>

        <!-- Feedback -->
        @if(session('feedback.message'))
            <div class="alert alert-success rounded-4">
                {{ session('feedback.message') }}
            </div>
        @endif

        <!-- Estado vacío -->
        @if($reviews->isEmpty())
            <p class="text-muted text-center py-5">
                No hay reseñas todavía.
            </p>
        @else

            <!-- Grid de reseñas -->
            <div class="row g-4">
                @foreach($reviews as $review)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow rounded-4">

                            <div class="card-body d-flex flex-column">

                                <!-- Producto -->
                                <span class="badge bg-secondary-subtle text-secondary fw-normal align-self-start mb-2">
                                    {{ $review->product->name ?? 'N/A' }}
                                </span>

                                <!-- Autor -->
                                <p class="fw-semibold mb-1">
                                    {{ $review->author }}
                                </p>

                                <!-- Rating -->
                                <p class="text-muted small mb-2">
                                    Rating: {{ $review->rating }}/5
                                </p>

                                <!-- Comentario -->
                                <p class="text-muted small mb-4">
                                    {{ Str::limit($review->comment, 50) }}
                                </p>

                                <!-- Acciones -->
                                <div class="mt-auto d-flex flex-wrap gap-2">
                                    <a href="{{ route('reviews.view', $review) }}"
                                       class="btn btn-info btn-sm rounded-pill flex-grow-1">
                                        Ver
                                    </a>

                                    @if(auth()->check() && auth()->user()->role === 'admin')
                                        <a href="{{ route('reviews.edit', $review) }}"
                                           class="btn btn-secondary btn-sm rounded-pill flex-grow-1">
                                            Editar
                                        </a>

                                        <form action="{{ route('reviews.destroy', $review->id) }}"
                                              method="POST"
                                              class="flex-grow-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-danger btn-sm rounded-pill w-100"
                                                    onclick="return confirm('¿Eliminar reseña?')">
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

        @endif

    </div>
</x-layout>
