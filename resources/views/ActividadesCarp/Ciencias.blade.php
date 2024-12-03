<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Ciencia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: 100% 100%;
        }
        .reiniciar-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .reiniciar-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans m-0 p-0">
    <div class="container mx-auto text-center p-5">
        <!-- Encabezado -->
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca" class="h-12">
            </div>
            <a href="{{ route('menu') }}" class="flex items-center">
                <img src="{{ asset('images/home.png') }}" alt="Home" class="h-12 w-12 mr-2">
                <span class="text-indigo-700 text-xl font-bold">Menú</span>
            </a>
        </header> 
        <!-- Contenido del juego -->
        <div class="contenido mt-10 bg-white p-8 rounded shadow-lg">
            <h2 class="text-5xl text-purple-600 font-bold mb-9">Juegos de ciencia</h2>
            <div id="temporizador" class="text-2xl mb-4">Tiempo restante: <span id="tiempo">10</span> segundos</div>

            <div id="pregunta" class="pregunta mb-4 text-3xl"></div>
            <div id="opciones" class="opciones mb-4 text-2xl"></div>
            <button class="reiniciar-btn text-xl">Reiniciar</button>
        </div>
        <div class="boton-regresar mt-10">
            <a href="{{ route('actividades') }}" class="flex items-center">
                <img src="{{ asset('images/flechaIzq.png') }}" alt="Regresar" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>

    <script src="{{ asset('js/ciencias.js') }}"></script>
</body>
</html>