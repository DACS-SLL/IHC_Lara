<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Material</title>
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
                <h1 class="text-indigo-700 text-5xl font-bold ml-4">Agregar Material</h1>
            </div>
            <a href="{{ route('menu') }}" class="flex items-center">
                <img src="{{ asset('images/home.png') }}" alt="Home" class="h-12 w-12 mr-2">
                <span class="text-indigo-700 text-xl font-bold">Menú</span>
            </a>
        </header>        
        <main class="mt-10">
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="bg-red-500 text-white p-4 rounded mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('material.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">Título del cuento:</label>
                    <input type="text" name="titulo" id="titulo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="archivo" class="block text-gray-700 text-sm font-bold mb-2">Archivo PDF:</label>
                    <input type="file" name="archivo" id="archivo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-xl font-bold">Agregar</button>
            </form>
        </main>
        <div class="boton-regresar mt-10">
            <a href="{{ route('material.index') }}" class="flex items-center">
                <img src="{{ asset('images/flechaIzq.png') }}" alt="Regresar" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>
</body>
</html>