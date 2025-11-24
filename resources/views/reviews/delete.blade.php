<?php
/** @var \App\Models\Review $review */
?>

<x-layout>
    <x-slot:title>Eliminar Review {{ $review->title}}</x-slot:title>

    <h1 class="mb-3">Confirmación para eliminar {{ $review->title }}</h1>
    <p>Estás a punto de <b>eliminar</b> la review <b>{{ $review->title }}</b>. ¿Deseas continuar?</p>

    <form action="{{ route('reviews.destroy', ['id' => $review->id]) }}" method="POST" class="mb-3">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Sí, Eliminar {{ $review->title }}</button>
    </form>
</x-layout>
