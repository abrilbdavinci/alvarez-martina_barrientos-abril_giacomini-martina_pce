<x-layout>
    <div class="container my-5">
        <x-slot:title> Kälm Premium </x-slot:title>
        <div class="container px-5">
            <header class="mb-3">
                <h1>Kälm Premium</h1>
            </header>
                        <!-- PLAN PREMIUM -->
            <div class="col-md-5 col-lg-4 order-1 order-md-2">
                <!-- Wrapper con borde grueso color cyan para simular la imagen -->
                <div class="card h-100 border-0 shadow rounded-4 p-2 d-flex flex-column text-center" style="background-color: #9CD5DB;">
                    <div class="card-body rounded-4 p-4 d-flex flex-column h-100" style="background-color: #DDF3F5;">
                        <h3 class="fw-bold mb-3" style="color: #2F5C64; font-family: 'Georgia', serif;">Kälm Premium</h3>
                        <p class="text-muted small mb-3 grow-0">Ideal para quienes ya conocen y quieren subir de nivel, con experiencia 100% personalizada.</p>

                        <p class="fs-2 fw-bold mb-3" style="color: #4CA9B6;">ARS 10.000<span class="fs-6 text-muted fw-normal">/mes</span></p>

                        <p class="fw-bold text-secondary mb-2 small">¿Qué incluye?</p>
                        <ul class="list-unstyled text-start text-secondary small mb-4 grow px-3">
                            <li class="mb-2"><span class="fw-bold me-2" style="color: #4CA9B6;">✓</span> <strong>Todo lo incluido en Kälm Free</strong></li>
                            <li class="mb-2"><span class="fw-bold me-2" style="color: #4CA9B6;">✓</span> Diagnóstico avanzado de piel y cabello</li>
                            <li class="mb-2"><span class="fw-bold me-2" style="color: #4CA9B6;">✓</span> Rutinas personalizables ilimitadas</li>
                            <li class="mb-2"><span class="fw-bold me-2" style="color: #4CA9B6;">✓</span> Self-pack (caja con artículos relacionados de Kalm) de bienvenida con posibilidad mensual</li>
                        </ul>

                        @if(auth()->check())
                            <form action="{{ route('profile.toggleRole', auth()->user()) }}" method="POST" class="d-inline ms-2">
                                @csrf
                                <button style="background-color: #2F5C64;" type="submit" class="btn rounded-pill px-4 fw-bold w-100 py-2 mt-auto text-white">
                                    @if((auth()->user()->role ?? 'free') === 'free') Hacerse premium @else Volver a free @endif
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
