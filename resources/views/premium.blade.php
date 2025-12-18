<x-layout>
    <x-slot:title>Kälm Premium</x-slot:title>

    <div class="container my-5">

        <!-- Header -->
        <header class="mb-4 text-center text-md-start">
            <h1 class="fw-bold display-6">Kälm Premium</h1>
            <p class="text-muted small mb-0">
                Ideal para quienes ya conocen y quieren subir de nivel, con experiencia 100% personalizada.
            </p>
        </header>

        <!-- Plan + detalle -->
        <div class="row justify-content-center align-items-start g-4">
            
            <!-- Card Plan -->
            <div class="col-12 col-lg-5">
                <div class="card shadow-sm rounded-4 overflow-hidden border-0">

                    <!-- Imagen / Visualización -->
                    <div class="bg-gradient" style="background-color:#DDF3F5; height:150px;">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <h3 class="fw-bold mb-0" style="color:#2F5C64; font-family:'Georgia', serif;">Kälm Premium</h3>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body d-flex flex-column">

                        <!-- Precio -->
                        <p class="fs-2 fw-bold text-center mb-3" style="color:#4CA9B6;">
                            ARS 10.000 <span class="fs-6 text-muted fw-normal">/mes</span>
                        </p>

                        <!-- Qué incluye -->
                        <p class="fw-bold text-secondary mb-2 small">¿Qué incluye?</p>
                        <ul class="list-unstyled text-start text-secondary small mb-4 px-3">
                            <li class="mb-2"><span class="fw-bold me-2" style="color:#4CA9B6;">✓</span> Todo lo incluido en Kälm Free</li>
                            <li class="mb-2"><span class="fw-bold me-2" style="color:#4CA9B6;">✓</span> Diagnóstico avanzado de piel y cabello</li>
                            <li class="mb-2"><span class="fw-bold me-2" style="color:#4CA9B6;">✓</span> Rutinas personalizables ilimitadas</li>
                            <li class="mb-2"><span class="fw-bold me-2" style="color:#4CA9B6;">✓</span> Self-pack de bienvenida con posibilidad mensual</li>
                        </ul>

                        <!-- Acción: solo para usuarios que no sean admin -->
                        @if(auth()->check() && auth()->user()->role !== 'admin')
                            <form action="{{ route('profile.toggleRole', auth()->user()) }}" method="POST" class="mt-auto">
                                @csrf
                                <button type="submit"
                                        class="btn btn-primary rounded-pill w-100 py-2 fw-bold"
                                        style="background-color:#2F5C64; color:#fff;">
                                    @if((auth()->user()->role ?? 'free') === 'free') Hacerse Premium @else Volver a Free @endif
                                </button>
                            </form>
                        @endif

                    </div>
                </div>
            </div>

            <!-- Detalle de beneficios -->
            <div class="col-12 col-lg-6">
                <h4 class="fw-bold mb-3">Detalle de cada beneficio</h4>
                <div class="bg-light p-4 rounded-4 shadow-sm">
                    <p class="mb-3">
                        <strong>Todo lo incluido en Kälm Free:</strong> Acceso a diagnóstico básico de piel y cabello, recomendaciones de rutina y consejos de cuidado diario.
                    </p>
                    <p class="mb-3">
                        <strong>Diagnóstico avanzado de piel y cabello:</strong> Evaluación profunda para entender tus necesidades específicas y personalizar tu rutina.
                    </p>
                    <p class="mb-3">
                        <strong>Rutinas personalizables ilimitadas:</strong> Creá todas las combinaciones de cuidado que necesites, sin restricciones.
                    </p>
                    <p class="mb-0">
                        <strong>Self-pack de bienvenida:</strong> Recibí una caja con artículos exclusivos de Kälm y la posibilidad de renovarlo mensualmente.
                    </p>
                </div>
            </div>

        </div>

    </div>
</x-layout>
