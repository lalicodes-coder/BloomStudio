@extends('layouts.application')

@section('content')

<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Citas</h1>

    <a href="{{ route('appointments.create') }}" 
       class="bg-pink-600 text-white px-4 py-2 rounded">
        Nueva cita
    </a>

    <div class="mt-6 space-y-4">
        @foreach ($appointments as $appointment)
            <div class="bg-white p-4 rounded shadow">
                <p><strong>Cliente:</strong> {{ $appointment->client_name }}</p>
                <p><strong>Fecha:</strong> {{ $appointment->date }}</p>
                <p><strong>Hora:</strong> {{ $appointment->time }}</p>
                <p>{{ $appointment->notes }}</p>
                <div class="flex gap-2 mt-2">
                    <a href="{{ route('appointments.edit', $appointment) }}" 
                    class="bg-yellow-400 px-3 py-1 rounded">
                        Editar
                    </a>

                    <form action="{{ route('appointments.destroy', $appointment) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="bg-red-500 text-white px-3 py-1 rounded">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection