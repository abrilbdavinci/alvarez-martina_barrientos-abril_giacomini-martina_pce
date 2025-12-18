<x-layout>
    <x-slot:title>Inicio | Kälm</x-slot:title>

    @auth
        @if (auth()->user()->role === 'admin')
            <div class="container my-4">
                <h1 class="fw-bold mb-4">Dashboard Admin</h1>
                <div class="row g-4">

                    <!-- Total de Posts -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-sm rounded-4 p-4 text-center">
                            <h5 class="fw-bold">Total de Posts</h5>
                            <p class="display-6 fw-bold">{{ $stats['posts_count'] ?? 0 }}</p>
                        </div>
                    </div>

                    <!-- Total de Reseñas -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-sm rounded-4 p-4 text-center">
                            <h5 class="fw-bold">Total de Reseñas</h5>
                            <p class="display-6 fw-bold">{{ $stats['reviews_count'] ?? 0 }}</p>
                        </div>
                    </div>
        @else
            <!-- Página normal para usuarios no admin -->

            <header style="background-image: url('{{ asset('images/header.png') }}'); background-size:cover; height:30vw;"
                class="mt-0 m-2 p-9 mb-5 rounded-4 text-light d-flex justify-content-between align-items-center">
                <div class="container ms-5">
                    <h1 style="color: #306067;" class="fw-bold text-5xl mb-3">
                        Descubrí los secretos de tu piel y cabello con Kälm.
                    </h1>
                    <a style="border-color: #37A0AF; background-color: #37A0AF;"
                        class="fw-bold me-2 px-4 py-2 rounded-4 text-light w-20 text-center text-decoration-none">
                        Ver más
                    </a>
                </div>
            </header>

            <div class="container">
                <!-- Tu próxima rutina -->
                <div class="d-flex my-5">
                    <img class="img-fluid" src="{{ asset('images/mockup.png') }}" alt="mockup kälm">
                    <div class="d-flex flex-column justify-content-center ms-5 pe-5">
                        <h2 style="color: #306067;">Tu próxima rutina de autocuidado</h2>
                        <p>Con la app de Kälm, diseñá una rutina de skincare que realmente se adapte a vos —a tu piel, a tu
                            ritmo y a tu día a día. Nuestra tecnología inteligente analiza tus necesidades, tipo de piel y
                            hábitos para crear un plan personalizado que evoluciona con vos.</p>
                    </div>
                </div>

                <!-- Botones Test de Rutina -->
                <div class="my-5 container">
                    <h2 style="color: #306067;" class="text-center">Tu rutina ideal</h2>
                    <p class="mb-5 text-center">Realizá nuestros tests para descubrir la rutina de autocuidado que mejor se
                        adapta a vos.</p>
                    <div style="color: white;" class="d-flex justify-content-between flex-wrap mb-5">
                        <div style="width: 17vw; height: 25vw; background-image: url('{{ asset('images/fondo3.jpg') }}');"
                            class="text-center shadow-sm rounded-5 p-5 me-5 d-flex flex-column justify-content-center align-items-center">
                            <img style="height: 9vw;" class="mb-5" src="{{ asset('images/icon3.svg') }}" alt="skincare">
                            <p class="fw-bold">Skincare</p>
                        </div>
                        <div style="width: 17vw; height: 25vw; background-image: url('{{ asset('images/fondo2.jpg') }}');"
                            class="text-center shadow-sm rounded-5 p-5 me-5 d-flex flex-column justify-content-center align-items-center">
                            <img style="height: 9vw;" class="mb-5" src="{{ asset('images/icon2.svg') }}" alt="haircare">
                            <p class="fw-bold">Haircare</p>
                        </div>
                        <div style="width: 17vw; height: 25vw; background-image: url('{{ asset('images/fondo.png') }}'); background-size:cover;"
                            class="text-center shadow-sm rounded-5 p-5 me-5 d-flex flex-column justify-content-center align-items-center">
                            <img style="height: 9vw;" class="mb-5" src="{{ asset('images/icon.svg') }}" alt="prototipo">
                            <a style="color: white;" class="fw-bold d-inline-block text-decoration-none"
                                href="https://www.figma.com/design/8p4Gj78estjBeiSBqFYJV5/proto?node-id=0-1&t=7gWD9YIaVhpseoar-1">Probá
                                nuestro prototipo</a>
                        </div>
                    </div>
                </div>

                <!-- Suscripciones -->
                <div class="row g-5 justify-content-center align-items-stretch">
                    <h2 class="text-center mt-5 fw-semibold" style="color:#2F5C64;">Planes</h2>

                    <!-- PLAN FREE -->
                    <div class="col-md-5 col-lg-4 order-2 order-md-1">
                        <div class="card h-100 shadow-sm rounded-4 p-4 d-flex flex-column text-center bg-white border"
                            style="border-color:#CFE6E9;">
                            <h3 class="fw-bold mb-3" style="color:#2F5C64; font-family:'Georgia', serif;">Kälm Free</h3>
                            <p class="text-muted small mb-3 grow-0">Ideal para quienes recién están empezando.</p>
                            <p class="fs-2 fw-bold mb-3" style="color:#3FA3AE;">GRATIS</p>
                            <p class="fw-bold text-secondary mb-2 small">¿Qué incluye?</p>
                            <ul class="list-unstyled text-start text-secondary small mb-4 grow px-3">
                                <li class="mb-2"><span class="fw-bold me-2" style="color:#3FA3AE;">✓</span> Diagnóstico
                                    básico
                                    de piel y cabello</li>
                                <li class="mb-2"><span class="fw-bold me-2" style="color:#3FA3AE;">✓</span>
                                    Recomendaciones de
                                    rutina</li>
                                <li class="mb-2"><span class="fw-bold me-2" style="color:#3FA3AE;">✓</span> Consejos y
                                    artículos sobre self-care</li>
                                <li class="mb-2"><span class="fw-bold me-2" style="color:#3FA3AE;">✓</span> Hasta 2
                                    rutinas
                                    personalizables</li>
                            </ul>
                            <button class="btn rounded-pill fw-bold w-100 py-2 mt-auto"
                                style="background-color:#E6F3F5; color:#2F5C64;">Empezar gratis</button>
                        </div>
                    </div>

                    <!-- PLAN PREMIUM -->
                    <div class="col-md-5 col-lg-4 order-1 order-md-2">
                        <div class="card h-100 border-0 shadow rounded-4 p-2 d-flex flex-column text-center"
                            style="background-color:#A8DDE2;">
                            <div class="card-body rounded-4 p-4 d-flex flex-column h-100" style="background-color:#EAF7F9;">
                                <h3 class="fw-bold mb-3" style="color:#2F5C64; font-family:'Georgia', serif;">Kälm Premium
                                </h3>
                                <p class="text-muted small mb-3 grow-0">Ideal para quienes ya conocen y quieren subir de
                                    nivel,
                                    con experiencia 100% personalizada.</p>
                                <p class="fs-2 fw-bold mb-3" style="color:#3FA3AE;">ARS 10.000 <span
                                        class="fs-6 text-muted fw-normal">/mes</span></p>
                                <p class="fw-bold text-secondary mb-2 small">¿Qué incluye?</p>
                                <ul class="list-unstyled text-start text-secondary small mb-4 grow px-3">
                                    <li class="mb-2"><span class="fw-bold me-2" style="color:#3FA3AE;">✓</span>
                                        <strong>Todo lo incluido en Kälm Free</strong>
                                    </li>
                                    <li class="mb-2"><span class="fw-bold me-2" style="color:#3FA3AE;">✓</span>
                                        Diagnóstico
                                        avanzado de piel y cabello</li>
                                    <li class="mb-2"><span class="fw-bold me-2" style="color:#3FA3AE;">✓</span> Rutinas
                                        personalizables ilimitadas</li>
                                    <li class="mb-2"><span class="fw-bold me-2" style="color:#3FA3AE;">✓</span>
                                        Self-pack
                                        de bienvenida con posibilidad mensual</li>
                                </ul>
                                <button class="btn rounded-pill fw-bold w-100 py-2 mt-auto text-white"
                                    style="background-color:#2F5C64;">Ver más</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Preguntas Frecuentes -->
                <h2 style="color: #306067;" class="text-center my-5">Preguntas Frecuentes</h2>
                <div class="accordion mb-5" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1">
                                ¿Cómo sabe la app qué tipo de piel / cabello tengo?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Nuestra app analiza tus respuestas a un breve cuestionario dermatológico. Con esa
                                información
                                identifica tu tipo de piel y te recomienda rutinas y productos personalizados.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2">
                                ¿Los productos recomendados son de marcas específicas?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                No. La app es totalmente imparcial: te sugiere productos basados en tus necesidades y tipo
                                de
                                piel, sin vínculos comerciales con marcas. Aun así, podés filtrar por tus marcas favoritas
                                si
                                querés.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3">
                                ¿Necesito pagar para usar la app?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Podés usar la versión básica de forma gratuita. Si querés acceder a funciones premium —como
                                el
                                seguimiento del progreso de tu piel, recordatorios inteligentes y rutinas avanzadas— hay
                                planes
                                de suscripción mensual o anual.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Influencers Destacados -->
                <h2 style="color: #306067;" class="text-center my-5">Nuestros embajadores</h2>
                <div class="row">
                    @php
                        $influencers = [
                            [
                                'name' => 'Dra. Daniela Pascali',
                                'description' =>
                                    'Dermatóloga. Reseñas honestas de productos, rutinas de skincare y salud de la piel.',
                                'image' => 'https://drapascali.com/wp-content/uploads/2022/09/danimobile.webp',
                                'instagram' => 'https://www.instagram.com/drapascali/',
                            ],
                            [
                                'name' => 'Dr. Simón Scarano',
                                'description' =>
                                    'Dermatólogo. Educación sobre cuidado de la piel y cabello desde una perspectiva científica y accesible.',
                                'image' => 'https://www.agencianova.com/data/fotos2/bbx_132574307_3_SimonScarano.jpeg',
                                'instagram' => 'https://www.instagram.com/simon.scarano/?hl=es',
                            ],
                            [
                                'name' => 'Dadatina',
                                'description' =>
                                    'Cosmetóloga y referente de skincare. Tips para rutinas accesibles y reseñas de productos.',
                                'image' =>
                                    'https://www.viapais.com.ar/resizer/v2/4KOEN5LGPRGRVNL3XAVF7PYBRM.jpg?quality=75&smart=true&auth=44dc568e1ddd3910f55e3d23215b019c99deac7803c80f17a7f54e159a38da31&width=980&height=640',
                                'instagram' => 'https://www.instagram.com/soydadatina/?hl=es-la',
                            ],
                        ];
                    @endphp

                    @foreach ($influencers as $influencer)
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm h-100">
                                <a href="{{ $influencer['instagram'] }}" target="_blank">
                                    <img src="{{ $influencer['image'] }}" class="card-img-top"
                                        alt="Foto de {{ $influencer['name'] }}"
                                        style="object-fit: cover; height: 500px;">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $influencer['name'] }}</h5>
                                    <p class="card-text">{{ $influencer['description'] }}</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ $influencer['instagram'] }}" target="_blank" class="btn btn-teal">
                                        <i class="fa-brands fa-instagram"></i> Ver Instagram
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        @endif
    @endauth

</x-layout>
