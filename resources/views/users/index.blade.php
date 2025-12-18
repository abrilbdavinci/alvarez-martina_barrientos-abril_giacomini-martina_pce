<x-layout>
    <div class="container my-5">

        <!-- Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <h1 class="fw-bold mb-3 mb-md-0">Usuarios</h1>
        </div>

        <!-- Feedback -->
        @if(session('feedback.message'))
            <div class="alert alert-success rounded-4 shadow-sm">
                {{ session('feedback.message') }}
            </div>
        @endif

        <!-- Estado vacío -->
        @if($users->isEmpty())
            <p class="text-muted text-center py-5">No hay usuarios todavía.</p>
        @else
            <!-- Tabla mejorada -->
            <div class="table-responsive shadow-sm rounded-4 overflow-hidden">
                <table class="table table-hover mb-0">
                    <thead class="table-light text-uppercase small">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr class="align-middle">
                                <td class="fw-semibold">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <span class="badge rounded-pill 
                                        @if($user->role === 'admin') bg-danger 
                                        @elseif($user->role === 'editor') bg-warning text-dark 
                                        @else bg-secondary @endif">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('users.view', $user) }}" 
                                       class="btn btn-info btn-sm rounded-pill px-3">
                                        Ver
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </div>
</x-layout>
