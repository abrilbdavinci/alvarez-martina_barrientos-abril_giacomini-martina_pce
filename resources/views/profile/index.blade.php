<x-layout>
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">{{ $user->name ?? 'Nombre Desconocido' }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $user->email }}</p>
                </p>
            </div>
            <div class="card-footer">
                <a href="{{ route('profile.edit', $user) }}" class="btn btn-secondary">Editar perfil</a>
            </div>
        </div>
    </div>
</x-layout>
