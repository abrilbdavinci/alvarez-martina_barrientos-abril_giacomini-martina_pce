<x-layout>
    <div class="container my-5 d-flex justify-content-center">
        <div class="card shadow-lg border-0 rounded-4 w-100" style="max-width: 520px;">
            
            <!-- Header -->
            <div class="card-header bg-primary text-white text-center rounded-top-4 py-4">
                <h3 class="mb-0 fw-semibold">
                    {{ $user->name ?? 'Nombre Desconocido' }}
                </h3>
            </div>

            <!-- Body -->
            <div class="card-body px-4 py-4">
                <div class="mb-3">
                    <p class="mb-1 text-muted small">Email</p>
                    <p class="fw-semibold mb-0">{{ $user->email }}</p>
                </div>

                <div>
                    <p class="mb-1 text-muted small">Rol</p>
                    <span class="badge bg-secondary px-3 py-2 text-uppercase">
                        {{ $user->role }}
                    </span>
                </div>
            </div>

            <!-- Footer -->
            <div class="card-footer bg-white border-0 text-center pb-4">
                <a href="{{ route('users.index') }}" class="btn btn-secondary px-4">
                    ← Volver a Reseñas
                </a>
            </div>

        </div>
    </div>
</x-layout>
