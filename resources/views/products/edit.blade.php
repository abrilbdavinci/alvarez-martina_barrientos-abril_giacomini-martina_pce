<?php
/** \Illuminate\Support\ViewErrorBag $errors */
?>

<x-layout>
    <div class="container my-5">
        <x-slot:title>Editar Producto</x-slot:title>

        <h1 class="mb-3">Editar Producto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">La información contiene errores.</div>
        @endif

        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Categoría</label>
                <select name="category" id="category" class="form-select" required>
                    <option value="">Seleccioná una categoría</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ old('category', $product->category) == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Imagen (opcional)</label>
                @if($product->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 200px; max-height: 200px;">
                    </div>
                @endif
                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        </form>
    </div>

</x-layout>
