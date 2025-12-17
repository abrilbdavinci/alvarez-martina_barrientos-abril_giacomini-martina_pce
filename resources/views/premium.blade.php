<x-layout>
    <div class="container my-5">
        <x-slot:title> Kälm Premium </x-slot:title>
        <div class="container px-5">
            <header class="mb-3">
                <h1>Kälm Premium</h1>
            </header>
            <p>Acá iría una explicacion de lo que tiene el plan, yo copiaría lo que está en el home</p>
            @if(auth()->check())
                <form action="{{ route('profile.toggleRole', auth()->user()) }}" method="POST" class="d-inline ms-2">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary">
                        @if((auth()->user()->role ?? 'free') === 'free') Hacerse premium @else Volver a free @endif
                    </button>
                </form>
            @endif
        </div>
    </div>
</x-layout>
