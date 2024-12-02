<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
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
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca" class="h-12">
            </div>
            <a href="{{ route('menu') }}" class="flex items-center">
                <img src="{{ asset('images/home.png') }}" alt="Home" class="h-12 w-12 mr-2">
                <span class="text-indigo-700 text-xl font-bold">Menú</span>
            </a>
        </header>        
        <main class="mt-10">
            <h2 class="text-5xl text-purple-600 font-bold mb-9">Juegos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-5">
                <div class="menu-item flex flex-col items-center">
                    <a href="{{ route('sesiones.index') }}" class="flex items-center justify-center w-full px-10 py-6 bg-blue-500 text-white text-xl rounded-lg transition duration-300 hover:bg-blue-700 ml-auto mr-auto">
                        Matematicas
                    </a>
                    <img src="{{ asset('images/Matematicas.png') }}" alt="Matematicas" class="w-72 h-64 mt-4">
                </div>
                <div class="menu-item flex flex-col items-center">
                    <a href="{{ route('sesiones.index') }}" class="flex items-center justify-center w-full px-10 py-6 bg-green-500 text-white text-xl rounded-lg transition duration-300 hover:bg-green-700 ml-auto mr-auto">
                        Comunicacion
                    </a>
                    <img src="{{ asset('images/Comunicacion.png') }}" alt="Comunicacion" class="w-64 h-64 mt-4">
                </div>
                <div class="menu-item flex flex-col items-center">
                    <a href="{{ route('sesiones.index') }}" class="flex items-center justify-center w-full px-10 py-6 bg-red-500 text-white text-xl rounded-lg transition duration-300 hover:bg-red-700 ml-auto mr-auto">
                        Ciencia
                    </a>
                    <img src="{{ asset('images/Ciencias.png') }}" alt="Ciencia" class="w-64 h-64 mt-4">
                </div>
            </div>            
        </main>
        <div>
            <a href="{{ route('sesiones.index') }}" class="flex items-center">
                <img src="{{ asset('images/flechaIzq.png') }}" alt="Home" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>
</body>
</html>