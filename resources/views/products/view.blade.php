<?php
/** @var \App\Models\Product $product */
?>

<x-layout>
    <x-slot:title>Detalle del Producto {{ $product->name }}</x-slot:title>

    <div class="container my-5">

        <div class="row g-5 align-items-start">

            <!-- Imagen -->
            <div class="col-12 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}"
                             alt="{{ $product->name }}"
                             class="img-fluid rounded-4"
                             style="max-height:420px; object-fit:cover;">
                    @endif
                </div>
            </div>

            <!-- Información -->
            <div class="col-12 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100">

                    <!-- Categoría -->
                    <span class="badge bg-secondary-subtle text-secondary fw-normal mb-2 align-self-start">
                        {{ $product->category }}
                    </span>

                    <!-- Título -->
                    <h1 class="fw-bold mb-3">
                        {{ $product->name }}
                    </h1>

                    <!-- Descripción -->
                    <p class="text-muted mb-4">
                        {{ $product->description }}
                    </p>

                    <!-- Precio -->
                    <p class="fs-3 fw-bold mb-4">
                        ${{ number_format($product->price, 2) }}
                    </p>

                    <!-- Volver -->
                    <a href="{{ route('products.index') }}"
                       class="btn btn-secondary rounded-pill w-50">
                        Volver a Productos
                    </a>

                </div>
            </div>

        </div>

    </div>
</x-layout>
