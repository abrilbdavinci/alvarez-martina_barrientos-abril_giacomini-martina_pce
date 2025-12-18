<?php
/** @var \App\Models\Post $post */
use Illuminate\Support\Facades\Storage;
?>

<x-layout>
    <x-slot:title>Detalle del Post — {{ $post->title }}</x-slot:title>

    <div class="container my-5">

        <!-- Post Card estilo social media -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden mx-auto" style="max-width:900px;">

            <!-- Imagen -->
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

            @if($imageUrl)
                <div class="bg-light d-flex justify-content-center align-items-center" style="max-height:500px; overflow:hidden;">
                    <img src="{{ $imageUrl }}" alt="{{ $post->title }}" class="img-fluid w-50" style="object-fit:contain;">
                </div>
            @endif

            <!-- Body -->
            <div class="card-body px-4 py-3 d-flex flex-column">

                <!-- Autor, categoría y fecha -->
                <div class="d-flex align-items-center mb-2">
                    <div class="me-3">
                        <span class="fw-bold">{{ $post->author ?? 'Anónimo' }}</span>
                    </div>
                    @if(!empty($post->category))
                        <span class="badge bg-primary me-auto">{{ $post->category }}</span>
                    @endif
                    @if($post->created_at)
                        <small class="text-muted">{{ $post->created_at->format('d/m/Y') }}</small>
                    @endif
                </div>

                <!-- Título -->
                <h2 class="fw-bold mb-3" style="font-size:1.75rem;">{{ $post->title }}</h2>

                <!-- Contenido -->
                <div class="mb-4 fs-5" style="line-height:1.7;">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <!-- Acciones estilo social -->
                <div class="d-flex flex-wrap gap-2 mt-auto">

                    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">
                        Volver
                    </a>

                    @auth
                        @php
                            $user = auth()->user();
                            $isAdmin = $user->role === 'admin';
                            $isOwner = $user->id === $post->user_id;
                        @endphp

                        @if($isOwner)
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-primary rounded-pill px-4 py-2">
                                Editar
                            </a>
                        @endif

                        @if($isAdmin || $isOwner)
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('¿Confirma que desea eliminar este post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger rounded-pill px-4 py-2">
                                    Eliminar
                                </button>
                            </form>
                        @endif
                    @endauth

                </div>

            </div>
        </div>

    </div>
</x-layout>
