<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Tres en Raya Matemático!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: 100% 100%;
        }
        .celda {
            width: 100px;
            height: 100px;
            border: 1px solid #000;
            display: inline-block;
            font-size: 24px;
            text-align: center;
            line-height: 100px;
            cursor: pointer;
        }
        .boton-regresar img {
            width: 50px;
            height: 50px;
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
            <h2 class="text-5xl text-purple-600 font-bold mb-7">¡Tres en Raya Matemático!</h2>
            <p class="text-2xl mb-4">Resuelve las operaciones matemáticas para colocar tu marca.</p>
            <div id="temporizador" class="text-2xl mb-4">Tiempo restante: <span id="tiempo">40</span> segundos</div>
            <div id="turno" class="text-2xl mb-4">Turno de: X</div>
            <div id="pregunta" class="pregunta mb-4 text-3xl bg-white p-4 rounded shadow"></div>
            <div id="tablero" class="grid grid-cols-3 gap-2 mx-auto" style="max-width: 280px;">
                <div class="celda" data-pos="0"></div>
                <div class="celda" data-pos="1"></div>
                <div class="celda" data-pos="2"></div>
                <div class="celda" data-pos="3"></div>
                <div class="celda" data-pos="4"></div>
                <div class="celda" data-pos="5"></div>
                <div class="celda" data-pos="6"></div>
                <div class="celda" data-pos="7"></div>
                <div class="celda" data-pos="8"></div>
            </div>
        </div>
        <!-- Botón de retroceso -->
        <div class="boton-regresar mt-10">
            <a href="{{ route('actividades') }}" class="flex items-center">
                <img src="{{ asset('images/flechaIzq.png') }}" alt="Regresar" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>

    <script src="{{ asset('js/matematicas.js') }}"></script>
</body>
</html>