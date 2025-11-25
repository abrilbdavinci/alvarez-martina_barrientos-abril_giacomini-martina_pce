<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Listado de posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    // Vista de un post
    public function view($id)
    {
        // Antes estaba probablemente así:
        // $post = Post::where('post_id', $id)->first();

        // Cambiar a:
        $post = Post::findOrFail($id); // Usa la clave primaria 'id'

        return view('posts.view', compact('post'));
    }


    // Formulario para crear post
    public function create()
    {
        $categories = [
            'Cuidado de la piel',
            'Cuidado del cabello',
            'Salud',
        ];
        return view('posts.create', compact('categories'));
    }

    // Guardar post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:100',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['title', 'content', 'author', 'category']);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
            $data['image'] = $imagePath;
        }
        Post::create($data);

        return redirect()->route('posts.index')->with('success', 'Post creado con éxito!');
    }

    // Formulario para eliminar
    public function delete(int $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.delete', ['post' => $post]);
    }

    // Mostrar formulario de edición
    public function edit(Post $post)
    {
        $categories = [
            'Cuidado de la piel',
            'Cuidado del cabello',
            'Salud',
        ];

        $posts = Post::all();
        return view('posts.edit', compact('post', 'posts', 'categories'));
    }

    // Editar post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:100',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['title', 'content', 'author', 'category']);
        if ($request->hasFile('image')) {
            if ($post->image && \Storage::disk('public')->exists($post->image)) {
                \Storage::disk('public')->delete($post->image);
            }
            $imagePath = $request->file('image')->store('posts', 'public');
            $data['image'] = $imagePath;
        }
        $post->update($data);

        return redirect()->route('posts.index')->with('success', 'Post actualizado con éxito!');
    }

    // Eliminar post
    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('feedback.message', 'Post <b>' . $post->title . '</b> deleted successfully.');
    }
}
