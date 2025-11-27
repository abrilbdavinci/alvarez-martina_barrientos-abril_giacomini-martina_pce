<x-layout>
    <div class="container my-5">
        <x-slot:title>Productos | Kälm</x-slot:title>

        <h1 class="mb-4">Productos</h1>

        @auth
        <a href="{{ route('products.create') }}" class="btn btn-info text-white mb-3">Nuevo Producto</a>
        @endauth

        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 250px;">
                                <span class="text-muted">Sin imagen</span>
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                            <p class="card-text"><strong>Categoría:</strong> {{ $product->category }}</p>
                            <p class="card-text"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
                            <div>
                                <a href="{{ route('products.view', $product) }}" class="btn btn-sm btn-info">Ver</a>
                                @if(auth()->check() && auth()->user()->role === 'admin')
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-secondary">Editar</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
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
