<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bloom Studio</title>

    <!-- Fuente bonita -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-pink-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white shadow p-4 flex justify-between">
        <h1 class="font-bold text-pink-600">Bloom Studio</h1>
        <div class="space-x-4">
            <a href="/" class="hover:text-pink-600">Inicio</a>
            <a href="/servicios" class="hover:text-pink-600">Servicios</a>
            <a href="/contacto" class="hover:text-pink-600">Contacto</a>
        </div>
    </nav>

    <!-- CONTENIDO -->
    <main class="max-w-6xl mx-auto px-6 py-10">
        @yield('content')
    </main>

</body>
</html>