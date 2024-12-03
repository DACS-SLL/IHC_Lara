<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Fecha</title>
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
                Registrar Fecha
            </h1>
        </header>

        <!-- Formulario -->
        <main class="mt-10">
            <form class="bg-white shadow-lg rounded-lg p-8 max-w-md mx-auto">
                <!-- Campo de Fecha -->
                <div class="mb-6">
                    <label for="fecha" class="block text-pink-500 text-lg font-bold mb-2">Fecha</label>
                    <input type="date" id="fecha" name="fecha" 
                           class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                </div>

                
                <div class="mb-6">
                    <label for="descripcion" class="block text-pink-500 text-lg font-bold mb-2">Descripción</label>
                    <input type="text" id="descripcion" name="descripcion" placeholder="Descripción del evento"
                           class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                </div>

                <!-- Botón de Registrar -->
                <div>
                    <button type="submit" 
                            class="w-full bg-purple-600 text-white text-xl py-3 rounded-lg transition duration-300 hover:bg-purple-700">
                        Registrar
                    </button>
                </div>
            </form>
        </main>

        <!-- Botón de retroceso -->
        <div class="mt-5">
            <a href="{{ route('menu') }}" class="flex items-center justify-center">
                <img src="{{ asset('images/flechaIzq.png') }}" alt="Home" class="h-16 w-16">
            </a>
        </div>
    </div>
</body>
</html>