<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Comunicación - Adivina la Palabra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Hace que el fondo se quede fijo al hacer scroll */
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
        <!-- Subtítulo del juego -->
        <h1 class="text-indigo-700 text-2xl font-bold mt-6 bg-white inline-block px-4 py-2 rounded-lg">Juego de Comunicación: Adivina la Palabra</h1>

        <!-- Contenedor del juego -->
        <div id="juego" class="mt-8 bg-white rounded-lg shadow-lg p-6 mx-auto w-full md:w-1/2">
            <p id="pista" class="text-lg text-green-600 mb-4">Pista: Es un animal que dice "miau".</p>
            <input type="text" id="respuesta" class="border-2 border-indigo-500 rounded-lg p-2 w-full text-lg mb-4" placeholder="Escribe tu respuesta aquí...">
            <button onclick="verificarRespuesta()" class="bg-indigo-700 text-white rounded-lg px-4 py-2 text-lg hover:bg-indigo-600">Enviar</button>
            <div id="resultado" class="mt-4 text-lg"></div>
        </div>

        <!-- Botón de retroceso -->
        <a href="{{ route('actividades') }}" class="fixed bottom-4 left-4">
            <img src="{{ asset('images/flechaIzq.png') }}" alt="Regresar" class="h-16 w-16">
        </a>
    </div>

    <script>
        // Array de preguntas y respuestas
        const preguntas = [
            { pista: "Es un animal que dice 'miau'.", palabra: "gato" },
            { pista: "Es un animal que dice 'guau'.", palabra: "perro" },
            { pista: "Es un vehículo que vuela por el aire.", palabra: "avión" },
            { pista: "Es un lugar donde aprendes muchas cosas.", palabra: "escuela" },
            { pista: "Es un animal que vive en el agua y tiene una gran mandíbula.", palabra: "cocodrilo" },
            { pista: "Es una fruta amarilla que puedes comer.", palabra: "plátano" },
            { pista: "Es una bebida que viene de las vacas.", palabra: "leche" },
            { pista: "Es una fruta que es roja y tiene semillas pequeñas en su superficie.", palabra: "fresa" },
            { pista: "Es un instrumento musical que tiene teclas blancas y negras.", palabra: "piano" },
            { pista: "Es un insecto que produce miel.", palabra: "abeja" }
        ];

        let preguntaActual = 0;

        // Función para mostrar la siguiente pregunta
        function mostrarPregunta() {
            const pregunta = preguntas[preguntaActual];
            document.getElementById('pista').textContent = `Pista: ${pregunta.pista}`;
            document.getElementById('respuesta').value = '';
            document.getElementById('resultado').textContent = '';
        }

        // Función para verificar la respuesta
        function verificarRespuesta() {
            const respuestaUsuario = document.getElementById('respuesta').value.toLowerCase();
            const resultadoDiv = document.getElementById('resultado');
            const palabraCorrecta = preguntas[preguntaActual].palabra;

            if (respuestaUsuario === palabraCorrecta) {
                resultadoDiv.textContent = "¡Correcto! 🎉";
                resultadoDiv.style.color = "green";
                preguntaActual++;
                if (preguntaActual < preguntas.length) {
                    setTimeout(mostrarPregunta, 1000);  // Esperar un segundo antes de mostrar la siguiente pregunta
                } else {
                    resultadoDiv.textContent = "¡Felicidades, has completado el juego!";
                    resultadoDiv.style.color = "blue";
                }
            } else {
                resultadoDiv.textContent = "¡Intenta nuevamente! ❌";
                resultadoDiv.style.color = "red";
            }
        }

        // Iniciar el juego mostrando la primera pregunta
        mostrarPregunta();
    </script>
</body>
</html>
