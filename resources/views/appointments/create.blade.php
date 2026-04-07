@extends('layouts.application')

@section('content')

<div class="p-6 max-w-lg mx-auto">
    <h1 class="text-2xl font-bold mb-4">Nueva cita</h1>

    <form method="POST" action="{{ route('appointments.store') }}">
        @csrf

        <input type="text" name="client_name" placeholder="Nombre cliente"
            class="w-full mb-3 p-2 border rounded">

        <input type="date" name="date"
            class="w-full mb-3 p-2 border rounded">

        <input type="time" name="time"
            class="w-full mb-3 p-2 border rounded">

        <textarea name="notes" placeholder="Notas"
            class="w-full mb-3 p-2 border rounded"></textarea>

        <button class="bg-pink-600 text-white px-4 py-2 rounded">
            Guardar cita
        </button>
    </form>

</div>

@endsection