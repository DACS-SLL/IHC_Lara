<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión de Aprendizaje</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body{
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: 100% 100%;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans m-0 p-0">
    <div class="container mx-auto text-center p-5">
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca" class="h-12">
            <h1 class="text-indigo-700 text-5xl font-bold ml-4">
                Sesión de Aprendizaje
            </h1>
        </header>        
        <main class="mt-10">
            <div class="flex items-center justify-center gap-10 mb-5">
                <div class="flex flex-col items-start gap-4">
                    <a href="{{ route('plantillas') }}" class="block w-full px-10 py-6 bg-purple-600 text-white text-xl rounded-lg transition duration-300 hover:bg-purple-700 ml-auto mr-auto">
                        Plantillas
                    </a>
                    <a href="{{ route('actividades') }}" class="block w-full px-10 py-6 bg-purple-600 text-white text-xl rounded-lg transition duration-300 hover:bg-purple-700 ml-auto mr-auto">
                        Actividades
                    </a>
                    <a href="{{ route('multimedia') }}" class="block w-full px-10 py-6 bg-purple-600 text-white text-xl rounded-lg transition duration-300 hover:bg-purple-700 ml-auto mr-auto">
                        Multimedia
                    </a>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/teacher.png') }}" alt="Imagen del maestro" class="max-w-xs">
                </div>
            </div>            
        </main>
    </div>
</body>
</html>
