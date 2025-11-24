<?php
/** \Illuminate\Support\ViewErrorBag $errors */
?>

<x-layout>
    <x-slot:title>Crear Producto</x-slot:title>

    <h1 class="mb-3">Crear Producto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">La información contiene errores.</div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
        </div>

        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
</x-layout>
