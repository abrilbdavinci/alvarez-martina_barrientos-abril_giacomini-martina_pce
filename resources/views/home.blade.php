<x-layout>
    <x-slot:title>Inicio | Kälm</x-slot:title>

    <header style="background-image: url('https://files.catbox.moe/43pskb.png'); background-size:cover; height:30vw;" class="mt-0 m-2 p-9 mb-5 rounded-4 text-light d-flex justify-content-between align-items-center">
        <div style="width: 34vw;" class="ms-5">
            <h1 style="color: #306067;" class="fw-bold text-5xl mb-3">Descubrí los secretos de tu piel y cabello con Kälm.</h1>
            <a style="border-color: #37A0AF; background-color: #37A0AF;" class="fw-bold me-2 px-4 py-2 rounded-4 text-light w-20 text-center text-decoration-none" ">Ver más</a>
        </div>
    </header>


<div class="container">
    <div class="d-flex my-5">
        <img class="img-fluid" src="https://files.catbox.moe/y072ew.png" alt="mockup kälm">
        <div class="d-flex flex-column justify-content-center ms-5 pe-5">
            <h2 style="color: #306067;">Tu próxima rutina de autocuidado</h2>
            <p>Con la app de Kälm, diseñá una rutina de skincare que realmente se adapte a vos —a tu piel, a tu ritmo y a tu día a día. Nuestra tecnología inteligente analiza tus necesidades, tipo de piel y hábitos para crear un plan personalizado que evoluciona con vos.</p>
        </div>
    </div>

        <!-- Botones para Test de Rutina -->
    <div class="my-5">
        <h2 style="color: #306067;" class="text-center">Tu rutina ideal</h2>
        <p class="mb-5 text-center">Realizá nuestros tests para descubrir la rutina de autocuidado que mejor se adapta a vos.</p>
        <div style="color: white;" class="d-flex justify-content-center flex-wrap mb-5">
            <div style="width: 17vw; height: 25vw; background-image: url('https://files.catbox.moe/8ejton.jpg');" class="text-center shadow-sm rounded-5 p-5 me-5 d-flex flex-column justify-content-center align-items-center">
                <img style="height: 9vw;" class="mb-5" src="https://files.catbox.moe/zsw18a.svg" alt="skincare">
                <p class="fw-bold">Skincare</p>
            </div>
            <div style="width: 17vw; height: 25vw; background-image: url('https://files.catbox.moe/7v635c.jpg');" class="text-center shadow-sm rounded-5 p-5 me-5 d-flex flex-column justify-content-center align-items-center">
                <img style="height: 9vw;" class="mb-5" src="https://files.catbox.moe/0p4nkk.svg" alt="haircare">
                <p class="fw-bold">Haircare</p>
            </div>
            <div style="width: 17vw; height: 25vw; background-image: url('https://files.catbox.moe/5spkpv.png');background-size: cover;" class="text-center shadow-sm rounded-5 p-5 me-5 d-flex flex-column justify-content-center align-items-center">
                <img style="height: 9vw;" class="mb-5" src="https://files.catbox.moe/dhwxv5.svg" alt="prototipo">
                <a style="color: white;" class="fw-bold d-inline-block text-decoration-none" href="https://www.figma.com/design/8p4Gj78estjBeiSBqFYJV5/proto?node-id=0-1&t=7gWD9YIaVhpseoar-1">Probá nuestro prototipo</a>
            </div>
        </div>
    </div>

    <!-- Subscripciones -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Subscripciones</h2>
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="row g-0">
                <!-- PLAN FREE -->
                <div class="col-md-4 p-4 border-end d-flex flex-column">
                    <h3 class="fw-semibold text-center">Kälm Free</h3>
                    <p class="text-muted mb-2 text-center">Ideal para quienes recién están empezando a adentrarse en el mundo del haircare y el skincare.</p>
                    <p style="color:#306067;" class="fs-3 fw-bold mb-4 text-center">Gratis</p>
                    <ul class="text-secondary mb-4">
                        <li>Diagnóstico básico del tipo de piel</li>
                        <li>Recomendaciones diarias de rutina</li>
                        <li>Registro de productos usados</li>
                        <li>Consejos y artículos sobre skincare</li>
                    </ul>
                    <button style="background-color:#37A0AF;margin-top: 2.5vw;" class="btn text-white rounded-pill px-4 text-center">Empezar gratis</button>
                </div>
                <!-- PLAN PLUS -->
                <div class="col-md-4 p-4 border-end bg-light d-flex flex-column">
                    <h3 class="fw-semibold text-center">Kälm Plus</h3>
                    <p class="text-muted mb-2 text-center">Ideal para quienes ya conocen su piel y buscan subir de nivel, Kälm Plus ofrece una experiencia aún más personalizada y sin anuncios. </p>
                    <p style="color:#306067;" class="fs-3 fw-bold mb-4 text-center">ARS $7,000 / mes</p>
                    <ul class="text-secondary mb-4">
                        <li>Análisis avanzado con IA y escaneo facial</li>
                        <li>Rutinas personalizadas según clima y hábitos</li>
                        <li>Recordatorios inteligentes</li>
                        <li>Estadísticas del progreso con fotos</li>
                        <li>Acceso a comunidad y foros privados</li>
                    </ul>
                    <button style="background-color:#37A0AF;" class="btn text-white rounded-pill px-4 text-center">Ver más</button>
                </div>
                <!-- PLAN PRO -->
                <div class="col-md-4 p-4 d-flex flex-column" style="background-color: #CCE2E5;">
                    <h3 class="fw-semibold text-center">Kälm Pro</h3>
                    <p class="text-muted mb-2 text-center">Ideal para expertos en skincare y haircare, tanto profesionales como entusiastas del autocuidado.</p>
                    <p style="color:#306067;" class="fs-3 fw-bold mb-4 text-center">ARS $20,000 / mes</p>
                    <ul class="text-secondary mb-4">
                        <li>Asesoramiento con expertos certificados</li>
                        <li>Recomendaciones según tu presupuesto</li>
                        <li>Rutinas adaptadas a tratamientos dermatológicos</li>
                        <li>Reportes mensuales con evolución</li>
                        <li>Acceso anticipado a nuevas funciones</li>
                    </ul>
                    <button style="background-color:#37A0AF;" class="btn text-white rounded-pill px-4 text-center">Ver más</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Preguntas Frecuentes -->
    <h2 style="color: #306067;" class="text-center my-5">Preguntas Frecuentes</h2>
    <div class="accordion mb-5" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    ¿Cómo sabe la app qué tipo de piel tengo?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Nuestra app analiza tus respuestas a un breve cuestionario dermatológico. Con esa información identifica tu tipo de piel y te recomienda rutinas y productos personalizados.
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
                    No. La app es totalmente imparcial: te sugiere productos basados en tus necesidades y tipo de piel, sin vínculos comerciales con marcas. Aun así, podés filtrar por tus marcas favoritas si querés.
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
                    Podés usar la versión básica de forma gratuita. Si querés acceder a funciones premium —como el seguimiento del progreso de tu piel, recordatorios inteligentes y rutinas avanzadas— hay planes de suscripción mensual o anual.
                </div>
            </div>
        </div>
    </div>

    <!-- Influencers Destacados -->
    <h2 style="color: #306067;" class="text-center my-5">Nuestra comunidad</h2>
    <div class="row">
        @php
            $influencers = [
                [
                    'name' => 'Influencer',
                    'description' => 'Especialista en skincare natural y cuidado del cabello.',
                    'image' => 'https://example.com/sofia.jpg',
                    'instagram' => 'https://instagram.com/sofia.belle'
                ],
                [
                    'name' => 'Influencer',
                    'description' => 'Consejos prácticos para cabello masculino y estilo de vida saludable.',
                    'image' => 'https://example.com/lucas.jpg',
                    'instagram' => 'https://instagram.com/lucas.haircare'
                ],
                [
                    'name' => 'Influencer',
                    'description' => 'Tips diarios de belleza y cuidado personal con enfoque natural.',
                    'image' => 'https://example.com/ana.jpg',
                    'instagram' => 'https://instagram.com/ana.glow'
                ],
            ];
        @endphp

        @foreach($influencers as $influencer)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <a href="{{ $influencer['instagram'] }}" target="_blank">
                        <img src="{{ $influencer['image'] }}" class="card-img-top" alt="Foto de {{ $influencer['name'] }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $influencer['name'] }}</h5>
                        <p class="card-text">{{ $influencer['description'] }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ $influencer['instagram'] }}" target="_blank" class="btn btn-primary">
                            <i class="fa-brands fa-instagram"></i> Ver Instagram
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-layout>
