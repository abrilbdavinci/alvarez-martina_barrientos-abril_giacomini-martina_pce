
<x-layout>
    <x-slot:title>Quiénes Somos</x-slot:title>

    <!-- Hero / Intro -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-12 col-lg-6">
                    <h1 class="display-5 fw-bold mb-4">Sobre Kälm</h1>
                    <p class="lead text-muted">
                        Nacida en Buenos Aires, Argentina, <i>Kälm</i> surge del deseo de transformar la rutina de cuidado personal en un momento de conexión real con uno mismo.
                    </p>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img src="{{ asset('images/about-1.png') }}" 
                         class="img-fluid rounded-4 shadow-sm" 
                         alt="Skincare consciente y bienestar" />
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestra Historia -->

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-md-8 text-center">
                    <h2 class="fw-semibold">Nuestra esencia</h2>
                    <p class="text-muted mt-2">
                        Una mirada honesta sobre la piel, pensada desde la empatía y el respeto.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <p>
                        Nuestra misión es acompañarte en ese proceso. A través de tecnología inteligente y una mirada humana, te ayudamos a descubrir una rutina pensada especialmente para vos: para tu tipo de piel, tu edad, tu ritmo y tu vida.
                    </p>
                    <p>
                        Porque no existe una piel igual a otra, creemos que el cuidado personal tampoco debería ser igual. En <i>Kälm</i>, la personalización no es un extra: es el punto de partida.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Imagen narrativa -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/about-2.png') }}" 
                         class="img-fluid rounded-4 shadow-sm" 
                         alt="Rutina de cuidado personal" />
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="fw-semibold mb-3">Escuchar la piel es el primer paso</h2>
                    <p class="text-muted">
                        Nuestra tecnología acompaña procesos reales, respetando los tiempos y necesidades de cada persona.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col">
                    <h2 class="fw-semibold">Nuestros valores</h2>
                    <p class="text-muted mt-2">Los principios que guían cada decisión que tomamos</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold">Diversidad real</h5>
                            <p class="card-text text-muted">
                                Celebramos cada textura, cada tono y cada historia. Todas las pieles merecen ser cuidadas con respeto y amor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold">Escucha activa</h5>
                            <p class="card-text text-muted">
                                Tu piel no necesita ser perfecta para ser hermosa: solo necesita ser escuchada y comprendida.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold">Tecnología consciente</h5>
                            <p class="card-text text-muted">
                                Usamos la tecnología como una herramienta para acompañar, no para imponer. Siempre al servicio de las personas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comunidad -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-12 col-md-9">
                    <img src="{{ asset('images/about-3.png') }}" 
                         class="img-fluid rounded-4 shadow-sm mb-4" 
                         alt="Comunidad Kälm" />
                </div>
            </div>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-9">
                    <h2 class="fw-semibold mb-4">Más que una app</h2>
                    <p class="text-muted">
                        <i>Kälm</i> no es solo una aplicación: es una comunidad que cree en el poder del cuidado consciente. Una pausa diaria para reconectar con vos, respirar profundo y sentirte bien en tu propia piel.
                    </p>
                    <p class="text-muted">
                        Queremos acompañarte todos los días, recordándote que cuidarte no es un lujo, sino una forma de bienestar.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout>

