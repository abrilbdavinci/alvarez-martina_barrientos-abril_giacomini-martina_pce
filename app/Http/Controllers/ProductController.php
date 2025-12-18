<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Formulario para crear producto
    public function create()
    {
        $categories = [
            'Cuidado de la piel',
            'Cuidado del cabello',
            'Suplementos',
            'Herramientas',
        ];

        return view('products.create', compact('categories'));
    }

    // Guardar nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['name', 'description', 'price', 'category']);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $data['image'] = $imagePath;
        }
        Product::create($data);

        return redirect()->route('products.index')->with('feedback.message', 'Producto creado correctamente.');
    }

    // Ver producto individual
    public function view(Product $product)
    {
        return view('products.view', compact('product'));
    }

    // Mostrar formulario de edición
    public function edit(Product $product)
    {
        $categories = [
            'Cuidado de la piel',
            'Cuidado del cabello',
            'Suplementos',
            'Herramientas',
        ];

        return view('products.edit', compact('product', 'categories'));
    }

    // Actualizar producto
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['name', 'description', 'price', 'category']);
        if ($request->hasFile('image')) {
            if ($product->image && \Storage::disk('public')->exists($product->image)) {
                \Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('products', 'public');
            $data['image'] = $imagePath;
        }
        $product->update($data);

        return redirect()->route('products.index')->with('feedback.message', 'Producto actualizado correctamente.');
    }

    // Eliminar producto
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('feedback.message', 'Producto eliminado correctamente.');
    }
}
