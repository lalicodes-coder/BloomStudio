@extends('layouts.application')

@section('content')

<div class="max-w-6xl mx-auto px-6 py-12">

    <!-- TÍTULO -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-pink-600 mb-2">
            Nuestros Servicios
        </h1>
        <p class="text-gray-500">
            Descubre todo lo que podemos hacer por tu cabello ✨
        </p>
    </div>

    <!-- SERVICIOS -->
    <div class="grid md:grid-cols-3 gap-8">

        <!-- CARD -->
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center">
            <div class="text-4xl mb-3">✂️</div>
            <h2 class="font-bold text-lg mb-2">Corte</h2>
            <p class="text-gray-500 mb-4">Estilo personalizado adaptado a ti</p>
            <span class="text-pink-600 font-semibold">Desde 15€</span>
        </div>

        <!-- CARD -->
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center">
            <div class="text-4xl mb-3">🎨</div>
            <h2 class="font-bold text-lg mb-2">Color</h2>
            <p class="text-gray-500 mb-4">Tintes y tratamientos profesionales</p>
            <span class="text-pink-600 font-semibold">Desde 30€</span>
        </div>

        <!-- CARD -->
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center">
            <div class="text-4xl mb-3">💇‍♀️</div>
            <h2 class="font-bold text-lg mb-2">Peinado</h2>
            <p class="text-gray-500 mb-4">Perfecto para eventos o tu día a día</p>
            <span class="text-pink-600 font-semibold">Desde 20€</span>
        </div>

    </div>

    <!-- CTA ABAJO -->
    <div class="text-center mt-16">
        <p class="text-gray-600 mb-4">
            ¿Lista para un cambio de look?
        </p>
        <a href="/contacto" 
           class="bg-pink-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-pink-700 transition">
            Reserva tu cita
        </a>
    </div>

</div>

@endsection