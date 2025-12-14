<!-- resources/views/reviews/edit.blade.php -->

<x-layout>
    <div class="container my-5">
        <h1 class="mb-4">Editar Perfil</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('profile.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar cambios</button>
            <a href="{{ route('profile.index', $user) }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-layout>
