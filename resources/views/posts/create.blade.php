<?php
/** \Illuminate\Support\ViewErrorBag $errors */
?>

<x-layout>
    <x-slot:title>Crear Post</x-slot:title>

    <h1 class="mb-3">Crear Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">La información contiene errores.</div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autor</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categoría</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ old('category') }}">
        </div>

        <button type="submit" class="btn btn-primary">Crear Post</button>
    </form>
</x-layout>
