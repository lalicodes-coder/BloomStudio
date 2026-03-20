@extends('layouts.application')

@section('content')

<div class="min-h-[80vh] flex items-center justify-center">

    <div class="w-full max-w-lg bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-xl border border-pink-100">

        <h1 class="text-3xl font-bold text-pink-600 mb-2 text-center">
            Contacta con nosotros
        </h1>

        <p class="text-center text-gray-500 mb-6">
            Estamos aquí para ayudarte 💕
        </p>

        <div class="flex justify-center mb-4">
            <div class="bg-pink-100 text-pink-600 p-3 rounded-full">
                ✂️
            </div>
        </div>

        <form class="space-y-4">

            <div>
                <label class="text-sm text-gray-600">Nombre</label>
                <input type="text" placeholder="Tu nombre"
                    class="w-full mt-1 p-3 border border-pink-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 transition">
            </div>

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email" placeholder="tu@email.com"
                    class="w-full mt-1 p-3 border border-pink-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 transition">
            </div>

            <div>
                <label class="text-sm text-gray-600">Mensaje</label>
                <textarea placeholder="Escribe tu mensaje..."
                    class="w-full mt-1 p-3 border border-pink-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 transition h-28"></textarea>
            </div>

            <button 
                class="w-full bg-gradient-to-r from-pink-500 to-pink-600 text-white p-3 rounded-lg font-semibold shadow-md hover:scale-[1.02] hover:shadow-lg transition">
                Enviar mensaje
            </button>

        </form>

    </div>

</div>

@endsection