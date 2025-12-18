<x-layout>
    <x-slot:title>Detalle de Reseña | {{ $review->product->name ?? 'Producto Desconocido' }}</x-slot:title>

    <div class="container my-5">

        <!-- Grid: Producto + Reseña -->
        <div class="row g-4">

            <!-- Producto -->
            <div class="col-12 col-md-6">
                <div class="card h-100 shadow border-0 rounded-4 overflow-hidden">

                    <!-- Imagen -->
                    @if($review->product && $review->product->image)
                        <img src="{{ asset('storage/' . $review->product->image) }}"
                             alt="{{ $review->product->name }}"
                             class="img-fluid"
                             style="height:250px; object-fit:cover;">
                    @else
                        <div class="bg-light d-flex align-items-center justify-content-center"
                             style="height:250px;">
                            <span class="text-muted small">Sin imagen</span>
                        </div>
                    @endif

                    <!-- Body -->
                    <div class="card-body d-flex flex-column">

                        <!-- Título -->
                        <h5 class="fw-bold mb-2">
                            {{ $review->product->name ?? 'Producto Desconocido' }}
                        </h5>

                        <!-- Descripción -->
                        <p class="text-muted small mb-3">
                            {{ Str::limit($review->product->description ?? 'Sin descripción', 100) }}
                        </p>

                        <!-- Meta info -->
                        <p class="small mb-1">
                            <strong>Categoría:</strong> {{ $review->product->category ?? 'N/A' }}
                        </p>

                        <p class="fw-semibold mb-3">
                            <strong>Precio:</strong> ${{ number_format($review->product->price ?? 0, 2) }}
                        </p>

                    </div>
                </div>
            </div>

            <!-- Reseña -->
            <div class="col-12 col-md-6">
                <div class="card h-100 shadow border-0 rounded-4">

                    <!-- Header -->
                    <div class="card-header bg-primary text-white rounded-top-4">
                        <h5 class="mb-0 fw-bold">Reseña de {{ $review->author }}</h5>
                    </div>

                    <!-- Body -->
                    <div class="card-body">

                        <!-- Rating -->
                        <p class="mb-3">
                            <strong>Rating:</strong>
                            @for ($i = 0; $i < $review->rating; $i++)
                                <span class="text-warning fs-5">&#9733;</span>
                            @endfor
                            @for ($i = $review->rating; $i < 5; $i++)
                                <span class="text-muted fs-5">&#9733;</span>
                            @endfor
                        </p>

                        <!-- Comentario -->
                        <p class="text-muted mb-0">
                            {{ $review->comment }}
                        </p>

                    </div>

                    <!-- Footer -->
                    <div class="card-footer bg-light d-flex justify-content-end">
                        <a href="{{ route('reviews.index') }}"
                           class="btn btn-secondary rounded-pill">
                            Volver a Reseñas
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-layout>
