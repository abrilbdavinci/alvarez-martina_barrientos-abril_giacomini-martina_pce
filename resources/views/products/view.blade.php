<?php
/** @var \App\Models\Product $product */
?>

<x-layout>
    <div class="container my-5">
        <x-slot:title>Detalle del Producto {{ $product->name }}</x-slot:title>

        <h1 class="mb-3">{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p><strong>Categoría:</strong> {{ $product->category }}</p>
        <small>Precio: ${{ $product->price }}</small>
    </div>
</x-layout>
