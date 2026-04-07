@extends('layouts.application')

@section('content')

<!-- HERO -->
<section class="h-screen flex items-center justify-center text-white text-center bg-cover bg-center relative"
    style="background-image: url('/images/peluqueria.jpg');">

    <!-- overlay oscuro -->
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10">
        <h1 class="text-5xl font-bold mb-4">Bloom Studio</h1>
        <p class="text-xl mb-6">Tu mejor versión empieza aquí</p>
        @auth
            <a href="{{ route('appointments.index') }}" 
            class="bg-white text-pink-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100">
                Ver mis citas
            </a>
        @endauth

        @guest
            <a href="{{ route('login') }}" 
            class="bg-white text-pink-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100">
                Reserva tu cita
            </a>
        @endguest
    </div>

</section>

<!-- SERVICIOS -->
<section class="py-16 text-center">
    <h2 class="text-3xl font-bold mb-10 text-pink-600">Nuestros Servicios</h2>

    <div class="grid md:grid-cols-3 gap-8 px-6">
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Corte</h3>
            <p>Cortes modernos adaptados a tu estilo</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Color</h3>
            <p>Tintes y tratamientos profesionales</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Peinado</h3>
            <p>Looks para eventos o tu día a día</p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bg-pink-600 text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-4">Reserva tu cita ahora</h2>
    <p class="mb-6">Contáctanos por WhatsApp o ven a visitarnos</p>
    <a href="/contacto" class="bg-white text-pink-600 px-6 py-3 rounded-full font-semibold">
        Contactar
    </a>
</section>

@endsection