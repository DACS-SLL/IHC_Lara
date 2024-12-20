<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: 100% 100%;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans m-0 p-0">
    <div class="container mx-auto text-center p-5">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca" class="h-12">
            <h1 class="text-indigo-700 text-5xl font-bold ml-4">
                Calendario
            </h1>
        </header>

        <!-- Contenido Principal -->
        <main class="mt-10">
            <div class="flex items-center justify-center gap-10 mb-5">
                <!-- Botones -->
                <div class="flex flex-col items-start gap-4">
                    <!-- Botón Ver Programación -->
                    <a href="{{ route('ver.programacion') }}" 
                       class="block w-full px-10 py-6 bg-purple-600 text-white text-xl rounded-lg transition duration-300 hover:bg-purple-700 flex items-center">
                        <img src="{{ asset('images/iconoProgramacion.png') }}" alt="Programación" class="h-6 w-6 mr-3">
                        Ver programación
                    </a>

                    <!-- Botón Ingresar Fecha -->
                    <a href="{{ route('ingresar.fecha') }}" 
                       class="block w-full px-10 py-6 bg-purple-600 text-white text-xl rounded-lg transition duration-300 hover:bg-purple-700 flex items-center">
                        <img src="{{ asset('images/iconoFecha.png') }}" alt="Fecha" class="h-6 w-6 mr-3">
                        Ingresar fecha
                    </a>
                </div>

                <!-- Imagen del personaje -->
                <div class="flex justify-center">
                    <img src="{{ asset('images/calendarioPersonaje.png') }}" alt="Imagen del personaje" class="max-w-xs">
                </div>
            </div>            
        </main>

        <!-- Botón de retroceso -->
        <div>
            <a href="{{ route('menu') }}" class="flex items-center">
                <img src="{{ asset('images/flechaIzq.png') }}" alt="Home" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>
</body>
</html>