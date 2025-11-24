<?php
/** @var \App\Models\Product $product */
?>

<x-layout>
    <x-slot:title>Eliminar Producto {{ $product->name }}</x-slot:title>

    <h1 class="mb-3">Confirmación para eliminar {{ $product->name }}</h1>

    <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar {{ $product->name }}</button>
    </form>
</x-layout>
