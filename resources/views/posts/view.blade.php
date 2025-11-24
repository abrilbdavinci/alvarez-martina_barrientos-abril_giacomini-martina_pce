<?php
/** @var \App\Models\Post $post */
?>

<x-layout>
    <x-slot:title>Detalle de Post {{ $post->title }}</x-slot:title>

    <h1 class="mb-3">{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <small>Autor: {{ $post->author }}</small>
</x-layout>
