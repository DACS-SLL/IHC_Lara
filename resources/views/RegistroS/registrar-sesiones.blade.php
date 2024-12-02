<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Sesiones</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans m-0 p-0">
    <div class="container mx-auto text-center p-5">
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <h1 class="text-indigo-700 text-5xl font-bold ml-4">
                Registrar Sesiones
            </h1>
        </header>        
        <main class="mt-10">
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('sesiones.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="seccion" class="block text-gray-700 text-sm font-bold mb-2">Sección:</label>
                    <input type="text" name="seccion" id="seccion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="archivo" class="block text-gray-700 text-sm font-bold mb-2">Archivo:</label>
                    <input type="file" name="archivo" id="archivo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-xl font-bold">Registrar</button>
            </form>
        </main>
    </div>
</body>
</html>