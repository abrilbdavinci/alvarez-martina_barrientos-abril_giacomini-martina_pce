<?php
/** @var \App\Models\Post $post */
?>

<x-layout>
    <div class="container my-5">
        <x-slot:title>Detalle de Post {{ $post->title }}</x-slot:title>

        @if($post->image)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded" style="max-width: 800px;">
            </div>
        @endif

        <h1 class="mb-3">{{ $post->title }}</h1>
        <p class="text-muted"><strong>Autor:</strong> {{ $post->author }} | <strong>Categoría:</strong> {{ $post->category }}</p>
        <div class="mb-4">
            {!! nl2br(e($post->content)) !!}
        </div>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Volver a Posts</a>
    </div>
</x-layout>
