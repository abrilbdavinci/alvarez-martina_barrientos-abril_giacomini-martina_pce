<x-layout>
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">{{ $review->product->name ?? 'Producto Desconocido' }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Autor:</strong> {{ $review->author }}</p>
                <p><strong>Rating:</strong>
                    @for ($i = 0; $i < $review->rating; $i++)
                        <span class="text-warning">&#9733;</span>
                    @endfor
                    @for ($i = $review->rating; $i < 5; $i++)
                        <span class="text-muted">&#9733;</span>
                    @endfor
                </p>
                <p><strong>Comentario:</strong> {{ $review->comment }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Volver a Reseñas</a>
            </div>
        </div>
    </div>
</x-layout>
