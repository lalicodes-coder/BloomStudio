@extends('layouts.application')

@section('content')

<div class="p-6 max-w-lg mx-auto">
    <h1 class="text-2xl font-bold mb-4">Editar cita</h1>

    <form method="POST" action="{{ route('appointments.update', $appointment) }}">
        @csrf
        @method('PUT')

        <input type="text" name="client_name" value="{{ $appointment->client_name }}"
            class="w-full mb-3 p-2 border rounded">

        <input type="date" name="date" value="{{ $appointment->date }}"
            class="w-full mb-3 p-2 border rounded">

        <input type="time" name="time" value="{{ $appointment->time }}"
            class="w-full mb-3 p-2 border rounded">

        <textarea name="notes"
            class="w-full mb-3 p-2 border rounded">{{ $appointment->notes }}</textarea>

        <button class="bg-pink-600 text-white px-4 py-2 rounded">
            Actualizar
        </button>
    </form>

</div>

@endsection