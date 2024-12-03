<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Material</title>
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
        <!-- Encabezado -->
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca" class="h-12">
                <h1 class="text-indigo-700 text-5xl font-bold ml-4">Buscar Material</h1>
            </div>
            <a href="{{ route('menu') }}" class="flex items-center">
                <img src="{{ asset('images/home.png') }}" alt="Home" class="h-12 w-12 mr-2">
                <span class="text-indigo-700 text-xl font-bold">Menú</span>
            </a>
        </header>        
        <main class="mt-10">
            <form action="{{ route('material.buscar') }}" method="GET" class="bg-white p-6 rounded-lg shadow-md">
                <div class="mb-4">
                    <label for="query" class="block text-gray-700 text-sm font-bold mb-2">Buscar Cuento:</label>
                    <input type="text" name="query" id="query" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-xl font-bold">Buscar</button>
            </form>

            @if(isset($resultados))
                <div class="mt-10">
                    <h2 class="text-3xl text-purple-600 font-bold mb-4">Resultados de la búsqueda</h2>
                    @if(count($resultados) > 0)
                        <ul class="list-disc list-inside">
                            @foreach($resultados as $resultado)
                                <li class="mb-2">
                                    <a href="{{ asset('storage/' . $resultado) }}" class="text-blue-500 hover:underline" target="_blank">{{ basename($resultado) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-red-500">No se encontraron resultados.</p>
                    @endif
                </div>
            @endif
        </main>
        <div class="boton-regresar mt-10">
            <a href="{{ route('material.index') }}" class="flex items-center">
                <img src="{{ asset('images/flechaIzq.png') }}" alt="Regresar" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>
</body>
</html>