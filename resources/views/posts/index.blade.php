<?php
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts */
?>

<x-layout>
    <x-slot:title>Listado de Posts</x-slot:title>

    <h1 class="mb-3">Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Crear Post</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->category }}</td>
                    <td>
                        <a href="{{ route('posts.view', ['id' => $post->id]) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('posts.delete', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
