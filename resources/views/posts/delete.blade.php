<?php
/** @var \App\Models\Post $post */
?>

<x-layout>
    <x-slot:title>Eliminar Post {{ $post->title}}</x-slot:title>

    <h1 class="mb-3">Confirmación para eliminar {{ $post->title }}</h1>

    <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Sí, Eliminar {{ $post->title }}</button>
    </form>
</x-layout>
