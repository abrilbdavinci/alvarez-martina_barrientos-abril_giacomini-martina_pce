<x-layout>
    <x-slot:title>Productos | Kälm</x-slot:title>

    <div class="container my-5">

        <!-- Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div>
                <h1 class="fw-bold mb-1">Productos</h1>
                <p class="text-muted small mb-0">
                    Catálogo de productos disponibles
                </p>
            </div>

            @auth
                <a href="{{ route('products.create') }}"
                   class="btn btn-primary text-white rounded-pill px-4 mt-3 mt-md-0">
                    Crear Producto
                </a>
            @endauth
        </div>

        <!-- Grid de productos -->
        <div class="row g-4">
            @foreach($products as $product)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card h-100 shadow border-0 rounded-4 overflow-hidden">

                        <!-- Imagen -->
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}"
                                 alt="{{ $product->name }}"
                                 class="img-fluid"
                                 style="height:250px; object-fit:cover;">
                        @else
                            <div class="bg-light d-flex align-items-center justify-content-center"
                                 style="height:250px;">
                                <span class="text-muted small">Sin imagen</span>
                            </div>
                        @endif

                        <!-- Body -->
                        <div class="card-body d-flex flex-column">

                            <!-- Título -->
                            <h5 class="fw-bold mb-2">
                                {{ $product->name }}
                            </h5>

                            <!-- Descripción -->
                            <p class="text-muted small mb-3">
                                {{ Str::limit($product->description, 100) }}
                            </p>

                            <!-- Meta info -->
                            <p class="small mb-1">
                                <strong>Categoría:</strong> {{ $product->category }}
                            </p>

                            <p class="fw-semibold mb-3">
                                <strong>Precio:</strong> ${{ number_format($product->price, 2) }}
                            </p>

                            <!-- Acciones -->
                            <div class="mt-auto d-flex flex-wrap gap-2">
                                <a href="{{ route('products.view', $product) }}"
                                   class="btn btn-info btn-sm rounded-pill flex-grow-1">
                                    Ver
                                </a>

                                @if(auth()->check() && auth()->user()->role === 'admin')
                                    <a href="{{ route('products.edit', $product) }}"
                                       class="btn btn-secondary btn-sm rounded-pill flex-grow-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('products.destroy', $product) }}"
                                          method="POST"
                                          class="flex-grow-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-danger btn-sm rounded-pill w-100"
                                                onclick="return confirm('¿Eliminar producto?')">
                                            Eliminar
                                        </button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
