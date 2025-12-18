<?php
/** @var \App\Models\Post $post */
use Illuminate\Support\Facades\Storage;
?>

<x-layout>
    <x-slot:title>Detalle de Post — {{ $post->title ?? 'Detalle' }}</x-slot:title>

    <div class="container my-5">

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
        <div class="mb-4">
            @if($imageUrl)
                <div class="card shadow-sm rounded-4 overflow-hidden">
                    <img src="{{ $imageUrl }}" 
                         alt="{{ $post->title }}" 
                         class="img-fluid" 
                         style="width:100%; max-height:480px; object-fit:cover;">
                </div>
            @else
                <div class="card shadow-sm rounded-4 d-flex align-items-center justify-content-center" 
                     style="width:100%; max-width:800px; height:300px; background-color:#f8f9fa;">
                    <div class="text-center">
                        <div class="display-1 text-muted mb-2">&#128247;</div>
                        <span class="text-muted small">Sin imagen disponible</span>
                    </div>
                </div>
            @endif
        </div>

        {{-- Título --}}
        <h1 class="fw-bold mb-3">{{ $post->title }}</h1>

        {{-- Meta info --}}
        <p class="text-muted mb-4">
            <strong>Autor:</strong> {{ $post->author ?? 'Anónimo' }}
            @if(!empty($post->category))
                | <strong>Categoría:</strong> {{ $post->category }}
            @endif
            @if($post->created_at)
                | <small>Publicado: {{ $post->created_at->format('d/m/Y') }}</small>
            @endif
        </p>

        {{-- Contenido --}}
        <div class="mb-4 fs-5" style="white-space:pre-wrap; line-height:1.7;">
            {!! nl2br(e($post->content)) !!}
        </div>

        {{-- Acciones --}}
        <div class="d-flex flex-wrap gap-3">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary rounded-pill px-4 py-2">
                Volver a Posts
            </a>

            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary rounded-pill px-4 py-2">
                        <i class="bi bi-pencil me-1"></i> Editar
                    </a>

                    <form action="{{ route('posts.destroy', $post) }}" method="POST" 
                          onsubmit="return confirm('¿Confirma que desea eliminar este post?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-pill px-4 py-2">
                            <i class="bi bi-trash me-1"></i> Eliminar
                        </button>
                    </form>
                @endif
            @endauth
        </div>

    </div>
</x-layout>
