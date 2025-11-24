<!-- resources/views/reviews/index.blade.php -->

<x-layout>
    <div class="container my-5">
        <h1 class="mb-4">Reseñas de Productos</h1>

        @if(session('feedback.message'))
            <div class="alert alert-success">{{ session('feedback.message') }}</div>
        @endif

        <a href="{{ route('reviews.create') }}" class="btn btn-primary mb-3">Crear Reseña</a>

        @if($reviews->isEmpty())
            <p class="text-muted">No hay reseñas todavía.</p>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Autor</th>
                            <th>Rating</th>
                            <th>Comentario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $review)
                            <tr>
                                <td>{{ $review->id }}</td>
                                <td>{{ $review->product->name ?? 'N/A' }}</td>
                                <td>{{ $review->author }}</td>
                                <td>{{ $review->rating }}/5</td>
                                <td>{{ Str::limit($review->comment, 50) }}</td>
                                <td>
                                    <a href="{{ route('reviews.view', $review->id) }}" class="btn btn-sm btn-info">Ver</a>
                                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar reseña?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-layout>
