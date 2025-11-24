<?php
/** @var \App\Models\Product $product */
?>

<x-layout>
    <x-slot:title>Detalle del Producto {{ $product->name }}</x-slot:title>

    <h1 class="mb-3">{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <small>Precio: ${{ $product->price }}</small>
</x-layout>
