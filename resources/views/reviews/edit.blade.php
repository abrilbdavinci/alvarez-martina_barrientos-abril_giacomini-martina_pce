<!-- resources/views/reviews/edit.blade.php -->

<x-layout>
    <div class="container my-5">
        <h1 class="mb-4">Editar Reseña</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reviews.update', $review) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="product_id" class="form-label">Producto</label>
                <select name="product_id" id="product_id" class="form-select" required>
                    <option value="">Selecciona un producto</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ (old('product_id', $review->product_id) == $product->id) ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Autor</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ old('author', $review->author) }}" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" value="{{ old('rating', $review->rating) }}" required>
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Comentario</label>
                <textarea name="comment" id="comment" class="form-control" rows="4" required>{{ old('comment', $review->comment) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Guardar cambios</button>
            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-layout>
