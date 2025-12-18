<x-layout>
    <div class="container my-5 d-flex justify-content-center">
        <div class="card shadow-lg border-0 rounded-4 w-100" style="max-width: 500px;">

            <!-- Header -->
            <div class="card-header text-white text-center rounded-top-4 py-5"
                 style="background: linear-gradient(135deg, #4CA9B6, #2F5C64);">
                <h3 class="mb-1 fw-bold">{{ $user->name ?? 'Nombre Desconocido' }}</h3>
                <small class="text-white-50">Perfil de usuario</small>
            </div>

            <!-- Body -->
            <div class="card-body px-4 py-5">

                <div class="mb-4 d-flex align-items-center">
                    <i class="bi bi-envelope-fill me-3 fs-4 text-primary"></i>
                    <div>
                        <p class="mb-1 text-muted small">Email</p>
                        <p class="fw-semibold mb-0">{{ $user->email }}</p>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <i class="bi bi-person-badge-fill me-3 fs-4 text-secondary"></i>
                    <div>
                        <p class="mb-1 text-muted small">Rol</p>
                        @php
                            $role = $user->role ?? 'free';
                            $badgeColor = match($role) {
                                'premium' => '#4CA9B6', // azul como antes
                                'free' => '#A0A0A0',    // gris
                                'admin' => '#D9534F',   // rojo
                                default => '#DDEFF2',
                            };
                            $textColor = match($role) {
                                'premium' => '#2F5C64',
                                'free' => '#3A3A3A',
                                'admin' => '#FFFFFF',
                                default => '#2F5C64',
                            };
                        @endphp
                        <span class="badge px-3 py-2 rounded-pill text-uppercase fw-semibold"
                              style="background-color: {{ $badgeColor }}; color: {{ $textColor }};">
                            {{ $role }}
                        </span>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="card-footer bg-white border-0 text-center py-4">
                <a href="{{ route('users.index') }}" class="btn btn-primary rounded-pill px-5 py-2">
                    ← Volver a Usuarios
                </a>
            </div>

        </div>
    </div>
</x-layout>
