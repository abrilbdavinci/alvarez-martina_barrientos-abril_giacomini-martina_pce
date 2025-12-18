<x-layout>
    <x-slot:title>Mi Perfil | {{ $user->name ?? 'Usuario' }}</x-slot:title>

    <div class="container my-5">

        <!-- Perfil principal -->
        <div class="row justify-content-center">

            <div class="col-12 col-md-8 col-lg-6">

                <div class="card shadow-lg rounded-4 overflow-hidden border-0">

                    <!-- Header con fondo atractivo -->
                    <div class="bg-secondary text-white p-4 d-flex flex-column align-items-center">
                        
                        <!-- Avatar o placeholder -->
                        <div class="rounded-circle bg-light mb-3 d-flex align-items-center justify-content-center"
                             style="width:100px; height:100px;">
                            @if(!empty($user->avatar))
                                <img src="{{ $user->avatar }}" 
                                     alt="{{ $user->name }}" 
                                     class="rounded-circle w-100 h-100 object-fit-cover">
                            @else
                                <span class="fs-2 text-primary">&#128100;</span>
                            @endif
                        </div>

                        <!-- Nombre y rol -->
                        <h3 class="fw-bold mb-1 text-center">{{ $user->name ?? 'Nombre Desconocido' }}</h3>
                        <span class="badge rounded-pill px-3 py-1 mt-3" style="background-color:#306067;">
                            {{ auth()->user()->role }}
                        </span>
                    </div>

                    <!-- Body -->
                    <div class="card-body p-4">

                        <!-- Email -->
                        <div class="mb-3">
                            <p class="text-muted mb-1 small">Email</p>
                            <p class="fw-semibold">{{ $user->email }}</p>
                        </div>

                        <!-- Teléfono -->
                        @if(!empty($user->phone))
                            <div class="mb-3">
                                <p class="text-muted mb-1 small">Teléfono</p>
                                <p class="fw-semibold">{{ $user->phone }}</p>
                            </div>
                        @endif

                        <!-- Dirección -->
                        @if(!empty($user->address))
                            <div class="mb-3">
                                <p class="text-muted mb-1 small">Dirección</p>
                                <p class="fw-semibold">{{ $user->address }}</p>
                            </div>
                        @endif

                        <!-- Botón principal -->
                        <div class="d-grid mt-4">
                            <a href="{{ route('profile.edit', $user) }}" 
                               class="btn btn-primary rounded-pill py-2 fw-bold">
                                Editar Perfil
                            </a>
                        </div>

                    </div>

                    <!-- Footer con fecha de actualización -->
                    <div class="card-footer bg-light text-center py-3">
                        <small class="text-muted">
                            Última actualización: {{ $user->updated_at?->format('d/m/Y') ?? 'N/A' }}
                        </small>
                    </div>

                </div>

            </div>
        </div>

    </div>
</x-layout>
