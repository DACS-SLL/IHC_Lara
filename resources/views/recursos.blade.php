<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión de Aprendizaje</title>
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
            <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca" class="h-12">
            <h1 class="text-indigo-700 text-5xl font-bold ml-4">
                Sesión de Aprendizaje
            </h1>
        </header>
        <main class="mt-10">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="grid grid-cols-2 gap-8">
                    <!-- Sección de Videos -->
                    <div>
                        <h2 class="text-pink-600 text-2xl font-bold mb-4">Videos</h2>
                        <div class="flex items-center justify-center gap-4">
                            <button class="bg-gray-200 p-2 rounded-full">
                                <img src="{{ asset('images/flechaIzq.png') }}" alt="Prev" class="h-8 w-8">
                            </button>
                            <img src="{{ asset('images/video-thumbnail.png') }}" alt="Video Thumbnail" class="h-32">
                            <button class="bg-gray-200 p-2 rounded-full">
                                <img src="{{ asset('images/flechaDer.png') }}" alt="Next" class="h-8 w-8">
                            </button>
                        </div>
                        <div class="flex justify-center mt-4 gap-4">
                            <button class="bg-green-500 p-2 rounded-full text-white">
                                ✔️
                            </button>
                            <button class="bg-gray-500 p-2 rounded-full text-white">
                                📌
                            </button>
                        </div>
                    </div>

                    <!-- Sección de Canciones -->
                    <div>
                        <h2 class="text-pink-600 text-2xl font-bold mb-4">Canciones</h2>
                        <div class="flex items-center justify-center gap-4">
                            <button class="bg-gray-200 p-2 rounded-full">
                                <img src="{{ asset('images/flechaIzq.png') }}" alt="Prev" class="h-8 w-8">
                            </button>
                            <img src="{{ asset('images/song-thumbnail.png') }}" alt="Song Thumbnail" class="h-32">
                            <button class="bg-gray-200 p-2 rounded-full">
                                <img src="{{ asset('images/flechaDer.png') }}" alt="Next" class="h-8 w-8">
                            </button>
                        </div>
                        <div class="flex justify-center mt-4 gap-4">
                            <button class="bg-green-500 p-2 rounded-full text-white">
                                ✔️
                            </button>
                            <button class="bg-gray-500 p-2 rounded-full text-white">
                                📌
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="mt-8">
            <a href="{{ route('menu') }}" class="flex items-center justify-center">
                <img src="{{ asset('images/flechaIzq.png') }}" alt="Home" class="h-16 w-16">
            </a>
        </footer>
    </div>
</body>
</html>
