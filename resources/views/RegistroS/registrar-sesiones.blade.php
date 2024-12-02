<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Sesiones</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: 100% 100%;
        }
    </style>
</head>
<body class="bg-white font-sans">
    <div class="container mx-auto p-6">
        <!-- Header -->
        <header class="flex justify-between items-center bg-white p-4 border-b-2 border-purple-600">
            <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca" class="h-16">
            <h1 class="text-4xl font-bold text-purple-600">Registrar Sesiones</h1>
        </header>

        <!-- Formulario -->
        <form action="{{ route('sesiones.store') }}" method="POST" enctype="multipart/form-data" class="mt-10 bg-white p-8 rounded-lg shadow-lg">
            @csrf
            <div class="mb-6">
                <label for="nombre" class="block text-pink-600 font-bold mb-2">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="w-full border-2 border-pink-300 p-3 rounded-lg focus:outline-none focus:border-pink-600" placeholder="Escribe tu nombre" required>
            </div>

            <div class="mb-6">
                <label for="seccion" class="block text-pink-600 font-bold mb-2">Sección</label>
                <input type="text" id="seccion" name="seccion" class="w-full border-2 border-pink-300 p-3 rounded-lg focus:outline-none focus:border-pink-600" placeholder="Escribe tu sección" required>
            </div>

            <div class="mb-6">
                <label for="archivo" class="block text-pink-600 font-bold mb-2">Cargar archivos nuevos (máx. 2 GB)</label>
                <input type="file" id="archivo" name="archivo" class="w-full border-2 border-pink-300 p-3 rounded-lg bg-white focus:outline-none focus:border-pink-600" required>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-purple-600 text-white px-6 py-3 rounded-lg font-bold text-xl hover:bg-purple-800 transition duration-300">
                    Registrar
                </button>
            </div>
        </form>
    </div>
</body>
</html>
