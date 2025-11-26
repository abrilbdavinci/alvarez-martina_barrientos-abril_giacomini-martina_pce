<?php
/** @var \App\Models\Post $post */
use Illuminate\Support\Facades\Storage;
?>

<x-layout>
    <div class="container my-5">
        <x-slot:title>Detalle de Post — {{ $post->title ?? 'Detalle' }}</x-slot:title>

        @php
            $imagePath = $post->image ?? null;
            $storageExists = $imagePath ? Storage::disk('public')->exists($imagePath) : false;
            $publicExists = $imagePath ? file_exists(public_path($imagePath)) : false;

            if ($storageExists) {
                $imageUrl = asset('storage/' . $imagePath);
            } elseif ($publicExists) {
                $imageUrl = asset($imagePath);
            } else {
                $imageUrl = null;
            }
        @endphp

        {{-- Imagen principal / placeholder --}}
        <div class="mb-4 d-flex justify-content-center">
            @if($imageUrl)
                <img src="{{ $imageUrl }}"
                     alt="{{ $post->title }}"
                     class="img-fluid rounded"
                     style="max-width: 100%; max-height: 480px; object-fit: cover;">
            @else
                <div class="border rounded bg-light d-flex align-items-center justify-content-center"
                     style="width:100%;max-width:800px;height:240px;">
                    <span class="text-muted">Sin imagen disponible</span>
                </div>
            @endif
        </div>

        <h1 class="mb-2">{{ $post->title }}</h1>

        <p class="text-muted mb-4">
            <strong>Autor:</strong> {{ $post->author ?? 'Anónimo' }}
            @if(!empty($post->category))
                | <strong>Categoría:</strong> {{ $post->category }}
            @endif
            @if($post->created_at)
                | <small>Publicado: {{ $post->created_at->format('d/m/Y') }}</small>
            @endif
        </p>

        <div class="mb-4 fs-5" style="white-space:pre-wrap; line-height:1.6;">
            {!! nl2br(e($post->content)) !!}
        </div>

        <div class="d-flex gap-2 flex-wrap">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Volver a Posts</a>

            @auth
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-outline-primary">
                    <i class="bi bi-pencil"></i> Editar
                </a>

                <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" onsubmit="return confirm('¿Confirma que desea eliminar este post?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash"></i> Eliminar
                    </button>
                </form>
            @endauth
        </div>
    </div>
</x-layout>
