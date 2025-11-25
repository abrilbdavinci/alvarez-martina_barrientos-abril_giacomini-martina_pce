<?php
/** @var \App\Models\Product $product */
?>

<x-layout>
    <div class="container my-5">
        <x-slot:title>Detalle del Producto {{ $product->name }}</x-slot:title>

        @if($product->image)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded" style="max-width: 500px;">
            </div>
        @endif

        <h1 class="mb-3">{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p><strong>Categoría:</strong> {{ $product->category }}</p>
        <p><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver a Productos</a>
    </div>
</x-layout>
