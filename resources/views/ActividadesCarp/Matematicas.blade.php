<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Matemático - Tres en Raya</title>
    <style>
        /* Fondo general para el cuerpo */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url('{{ asset('images/FondoP.png') }}'); /* Ruta de la imagen */
            background-size: cover; /* Ajustar para cubrir todo el fondo */
            background-repeat: no-repeat; /* Evitar que el fondo se repita */
            background-position: center; /* Centrar el fondo */
            margin: 0;
            padding: 0;
        }

        /* Estilo para el encabezado */
        header {
            display: flex; /* Activamos el modelo de diseño flexbox */
            justify-content: space-between; /* Distribuye los elementos hacia los extremos (izquierda y derecha) */
            align-items: center; /* Alineamos los elementos verticalmente en el centro del encabezado */
            background-color: white; /* Fondo blanco */
            padding: 10px 30px; /* Espaciado interno del encabezado (10px arriba y abajo, 30px a los lados) */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Añadimos una sombra sutil al encabezado */
            position: fixed; /* Fija el encabezado en la parte superior de la pantalla */
            top: 0; /* Coloca el encabezado en la parte superior */
            width: 100%; /* Ancho del encabezado será del 100% del ancho de la pantalla */
            z-index: 1000; /* Asegura que el encabezado quede por encima de otros elementos */
        }

        /* Ajustar el tamaño de la imagen del logo */
        header .logo img {
            height: 40px; /* Aumentamos el tamaño del logo */
        }

        /* Ajustar el tamaño de la imagen de home */
        header a img {
            height: 28px; /* Tamaño ajustado para la imagen */
            width: 28px;
            margin-right: 8px; /* Separar la imagen del texto */
        }

        /* Ajustar el texto de "Menú" */
        header a {
            display: flex; /* Activar flexbox para alinear elementos dentro del enlace */
            align-items: center; /* Centrar verticalmente la imagen y el texto */
            color: #8E44AD; /* Texto en color morado */
            text-decoration: none;
            font-size: 1.2em; /* Texto ajustado a un tamaño cómodo */
            font-weight: bold;
            margin-left: 20px; /* Añadir margen para separarlo del borde izquierdo */
        }

        /* Estilo para el contenido del juego */
        body {
            padding-top: 60px; /* Ajustar padding para que el contenido no se oculte debajo del encabezado */
        }

        h1 {
            color: #4CAF50;
            margin-top: 20px;
        }

        #tablero {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-gap: 10px;
            justify-content: center;
            margin: 20px auto;
        }

        .celda {
            width: 100px;
            height: 100px;
            font-size: 2em;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #4CAF50;
            background-color: white;
            cursor: pointer;
        }

        .disabled {
            pointer-events: none;
            background-color: #ddd;
        }

        #temporizador {
            font-size: 1.5em;
            color: #ff5722;
        }

        #pregunta {
            margin: 20px;
            font-size: 1.2em;
        }

        /* Botón de retroceso más pequeño */
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
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca">
        </div>
        <a href="{{ route('menu') }}">
            <img src="{{ asset('images/home.png') }}" alt="Home">
            <span>Menú</span> <!-- Texto del menú ahora es morado -->
        </a>
    </header>

    <!-- Contenido del juego -->
    <h1>¡Tres en Raya Matemático!</h1>
    <p>Resuelve las operaciones matemáticas para colocar tu marca.</p>
    <div id="temporizador">Tiempo restante: <span id="tiempo">10</span> segundos</div>
    <div id="pregunta"></div>
    <div id="tablero">
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

    <!-- Botón de retroceso -->
    <div class="boton-regresar">
        <a href="{{ route('actividades') }}">
            <img src="{{ asset('images/flechaIzq.png') }}" alt="Regresar">
        </a>
    </div>

    <script>
        // Variables globales
        let tablero = Array(9).fill(null); // Tablero de juego
        let jugadorActual = 'X'; // Jugador actual ('X' o 'O')
        let tiempoRestante = 10; // Tiempo por turno
        let intervalID;

        // Operaciones matemáticas
        const operaciones = [
            { pregunta: "5 + 3", respuesta: 8 },
            { pregunta: "6 - 2", respuesta: 4 },
            { pregunta: "4 x 3", respuesta: 12 },
            { pregunta: "10 / 2", respuesta: 5 },
            { pregunta: "7 + 6", respuesta: 13 },
            { pregunta: "9 - 5", respuesta: 4 },
            { pregunta: "3 x 4", respuesta: 12 },
            { pregunta: "8 / 4", respuesta: 2 },
            { pregunta: "2 + 2", respuesta: 4 },
        ];

        // Seleccionar elementos del DOM
        const celdas = document.querySelectorAll('.celda');
        const preguntaDiv = document.getElementById('pregunta');
        const tiempoDiv = document.getElementById('tiempo');

        // Función para reiniciar el temporizador
        function reiniciarTemporizador() {
            clearInterval(intervalID);
            tiempoRestante = 10;
            tiempoDiv.textContent = tiempoRestante;
            intervalID = setInterval(() => {
                tiempoRestante--;
                tiempoDiv.textContent = tiempoRestante;
                if (tiempoRestante === 0) {
                    alert(`Se acabó el tiempo. Turno perdido para ${jugadorActual}`);
                    cambiarTurno();
                }
            }, 1000);
        }

        // Función para mostrar una pregunta
        function mostrarPregunta() {
            const operacion = operaciones[Math.floor(Math.random() * operaciones.length)];
            preguntaDiv.textContent = `Pregunta para ${jugadorActual}: ${operacion.pregunta}`;
            preguntaDiv.dataset.respuesta = operacion.respuesta; // Guardar la respuesta correcta
        }

        // Cambiar turno
        function cambiarTurno() {
            jugadorActual = jugadorActual === 'X' ? 'O' : 'X';
            reiniciarTemporizador();
            mostrarPregunta();
        }

        // Verificar si hay un ganador
        function verificarGanador() {
            const combinacionesGanadoras = [
                [0, 1, 2], [3, 4, 5], [6, 7, 8], // Filas
                [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columnas
                [0, 4, 8], [2, 4, 6]             // Diagonales
            ];

            for (const combinacion of combinacionesGanadoras) {
                const [a, b, c] = combinacion;
                if (tablero[a] && tablero[a] === tablero[b] && tablero[a] === tablero[c]) {
                    alert(`¡El jugador ${tablero[a]} ganó!`);
                    reiniciarJuego();
                    return true;
                }
            }

            if (!tablero.includes(null)) {
                alert("¡Es un empate!");
                reiniciarJuego();
            }
            return false;
        }

        // Reiniciar juego
        function reiniciarJuego() {
            tablero.fill(null);
            celdas.forEach(celda => {
                celda.textContent = '';
                celda.classList.remove('disabled');
            });
            jugadorActual = 'X';
            reiniciarTemporizador();
            mostrarPregunta();
        }

        // Evento de clic en las celdas
        celdas.forEach(celda => {
            celda.addEventListener('click', () => {
                if (!celda.textContent && !celda.classList.contains('disabled')) {
                    const respuestaUsuario = prompt(preguntaDiv.textContent + " (Responde)");
                    if (parseInt(respuestaUsuario) === parseInt(preguntaDiv.dataset.respuesta)) {
                        // Si la respuesta es correcta, marcar la celda
                        celda.textContent = jugadorActual;
                        tablero[celda.dataset.pos] = jugadorActual;
                        celda.classList.add('disabled');
                        if (!verificarGanador()) {
                            cambiarTurno();
                        }
                    } else {
                        alert("Respuesta incorrecta. ¡Turno perdido!");
                        cambiarTurno();
                    }
                }
            });
        });

        // Iniciar juego
        reiniciarJuego();
    </script>
</body>
</html>
