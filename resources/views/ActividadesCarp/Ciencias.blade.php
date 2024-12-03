<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Ciencia</title>
    <style>
        /* Fondo general para el cuerpo */
        body {
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Estilo para el encabezado */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 5px 15px; /* Reducido el padding */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para el encabezado */
            border-bottom: 1px solid #ddd; /* Borde debajo del encabezado */
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        /* Logo ajustado */
        header .logo img {
            height: 30px; /* Logo más pequeño */
        }

        /* Botón de Home ajustado */
        header a img {
            height: 24px; /* Reducir tamaño de la imagen de home */
            width: 24px;
            margin-right: 10px; /* Separar el texto de la imagen */
        }

        /* Estilo para el contenido */
        .contenido {
            padding-top: 70px; /* Espacio ajustado para que el contenido quede debajo del encabezado */
            text-align: center;
        }

        h1 {
            color: #4CAF50;
            margin-top: 20px; /* Espacio ajustado */
        }

        .pregunta {
            margin: 20px;
            font-size: 1.5em;
        }

        .opciones {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .opcion {
            background-color: #fff;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
            cursor: pointer;
            width: 200px;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .opcion:hover {
            background-color: #f1f1f1;
        }

        /* Temporizador */
        #temporizador {
            font-size: 1.5em;
            color: #ff5722;
            margin: 20px;
        }

        /* Resultado */
        .resultado {
            font-size: 1.5em;
            margin-top: 20px;
        }

        /* Botón de retroceso */
        .boton-regresar {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
        }

        .boton-regresar img {
            height: 40px;
            width: 40px;
        }

        /* Estilo del botón reiniciar */
        .reiniciar-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2em;
            background-color: #4CAF50;
            color: white;
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
        <div class="contenido">
            <h1>Juego de Ciencia</h1>
            <div id="temporizador">Tiempo restante: <span id="tiempo">10</span> segundos</div>

            <div id="pregunta" class="pregunta"></div>
            <div id="opciones" class="opciones"></div>

            <div class="resultado" id="resultado"></div>
            <button class="reiniciar-btn" id="reiniciarBtn" style="display: none;" onclick="reiniciarJuego()">Reiniciar el juego</button>
        </div>

        <!-- Botón de retroceso -->
        <div class="boton-regresar">
            <a href="{{ route('actividades') }}" class="flex items-center">
                <img src="{{ asset('images/flechaIzq.png') }}" alt="Regresar" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>

    <script>
        const preguntas = [
            {
                pregunta: "¿Cuál es el planeta más cercano al sol?",
                opciones: ["Venus", "Marte", "Mercurio", "Tierra"],
                respuestaCorrecta: "Mercurio"
            },
            {
                pregunta: "¿Qué parte de la planta realiza la fotosíntesis?",
                opciones: ["Raíz", "Hoja", "Flor", "Fruto"],
                respuestaCorrecta: "Hoja"
            },
            {
                pregunta: "¿Cuántos huesos tiene el cuerpo humano adulto?",
                opciones: ["206", "205", "210", "208"],
                respuestaCorrecta: "206"
            },
            {
                pregunta: "¿Qué gas es el más abundante en la atmósfera de la Tierra?",
                opciones: ["Oxígeno", "Nitrógeno", "Hidrógeno", "Dióxido de carbono"],
                respuestaCorrecta: "Nitrógeno"
            },
            {
                pregunta: "¿Cómo se llama el proceso de transformación de la oruga en mariposa?",
                opciones: ["Metamorfosis", "Fotosíntesis", "Reproducción", "Crecimiento"],
                respuestaCorrecta: "Metamorfosis"
            }
        ];

        let tiempoRestante = 10;
        let intervalID;
        let preguntaActual = 0;
        let puntuacion = 0;

        // Seleccionar elementos del DOM
        const preguntaDiv = document.getElementById('pregunta');
        const opcionesDiv = document.getElementById('opciones');
        const tiempoDiv = document.getElementById('tiempo');
        const resultadoDiv = document.getElementById('resultado');
        const botonReiniciar = document.getElementById('reiniciarBtn');

        // Función para iniciar el temporizador
        function reiniciarTemporizador() {
            clearInterval(intervalID);
            tiempoRestante = 10;
            tiempoDiv.textContent = tiempoRestante;
            intervalID = setInterval(() => {
                tiempoRestante--;
                tiempoDiv.textContent = tiempoRestante;
                if (tiempoRestante === 0) {
                    alert("Se acabó el tiempo para esta pregunta.");
                    siguientePregunta();
                }
            }, 1000);
        }

        // Función para mostrar la pregunta y las opciones
        function mostrarPregunta() {
            const pregunta = preguntas[preguntaActual];
            preguntaDiv.textContent = pregunta.pregunta;

            opcionesDiv.innerHTML = "";
            pregunta.opciones.forEach(opcion => {
                const boton = document.createElement("button");
                boton.textContent = opcion;
                boton.classList.add("opcion");
                boton.onclick = () => verificarRespuesta(opcion);
                opcionesDiv.appendChild(boton);
            });

            reiniciarTemporizador();
        }

        // Función para verificar la respuesta
        function verificarRespuesta(opcionSeleccionada) {
            const pregunta = preguntas[preguntaActual];
            if (opcionSeleccionada === pregunta.respuestaCorrecta) {
                puntuacion++;
            }
            siguientePregunta();
        }

        // Función para mostrar la siguiente pregunta
        function siguientePregunta() {
            preguntaActual++;
            if (preguntaActual < preguntas.length) {
                mostrarPregunta();
            } else {
                mostrarResultado();
            }
        }

        // Función para mostrar el resultado final
        function mostrarResultado() {
            preguntaDiv.style.display = "none";
            opcionesDiv.style.display = "none";
            resultadoDiv.textContent = `¡Juego terminado! Tu puntuación es: ${puntuacion} de ${preguntas.length}`;
            botonReiniciar.style.display = "inline-block";  // Mostrar el botón de reiniciar
            clearInterval(intervalID);  // Detener el temporizador
        }

        // Función para reiniciar el juego
        function reiniciarJuego() {
            preguntaActual = 0;
            puntuacion = 0;
            resultadoDiv.textContent = "";  // Limpiar el resultado
            preguntaDiv.style.display = "block";
            opcionesDiv.style.display = "block";
            botonReiniciar.style.display = "none";  // Ocultar el botón de reiniciar
            mostrarPregunta();  // Iniciar nuevamente el juego
        }

        // Iniciar el juego
        mostrarPregunta();
    </script>
</body>
</html>
