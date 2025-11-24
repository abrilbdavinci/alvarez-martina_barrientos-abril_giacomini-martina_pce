<x-layout>
    <div class="container my-5">
        <x-slot:title>Productos | Kälm</x-slot:title>

        <h1 class="mb-4">Productos</h1>

        <a href="{{ route('products.create') }}" class="btn btn-info text-white mb-3">Nuevo Producto</a>

        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                            <p class="card-text"><strong>Categoría:</strong> {{ $product->category }}</p>
                            <p class="card-text"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
                            <td>
                                <a href="{{ route('products.view', $product->id) }}" class="btn btn-sm btn-info">Ver</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                                </form>
                            </td>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
