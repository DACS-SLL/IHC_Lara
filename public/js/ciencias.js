// resources/js/ciencias.js

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
];

let tiempoRestante = 10;
let temporizador;
let preguntaActual = 0;

function iniciarJuego() {
    mostrarPregunta();
    iniciarTemporizador();
}

function iniciarTemporizador() {
    temporizador = setInterval(() => {
        tiempoRestante--;
        document.getElementById('tiempo').textContent = tiempoRestante;
        if (tiempoRestante <= 0) {
            clearInterval(temporizador);
            alert('¡Tiempo agotado!');
            reiniciarJuego();
        }
    }, 1000);
}

function mostrarPregunta() {
    const pregunta = preguntas[preguntaActual];
    document.getElementById('pregunta').textContent = pregunta.pregunta;
    const opcionesDiv = document.getElementById('opciones');
    opcionesDiv.innerHTML = '';
    pregunta.opciones.forEach(opcion => {
        const boton = document.createElement('button');
        boton.textContent = opcion;
        boton.classList.add('bg-blue-500', 'text-white', 'px-4', 'py-2', 'm-2', 'rounded');
        boton.onclick = () => verificarRespuesta(opcion);
        opcionesDiv.appendChild(boton);
    });
}

function verificarRespuesta(opcionSeleccionada) {
    const pregunta = preguntas[preguntaActual];
    if (opcionSeleccionada === pregunta.respuestaCorrecta) {
        alert('¡Respuesta correcta!');
        preguntaActual++;
        if (preguntaActual < preguntas.length) {
            mostrarPregunta();
        } else {
            alert('¡Felicidades, has completado el juego!');
            reiniciarJuego();
        }
    } else {
        alert('Respuesta incorrecta. Inténtalo de nuevo.');
    }
}

function reiniciarJuego() {
    clearInterval(temporizador);
    tiempoRestante = 10;
    preguntaActual = 0;
    document.getElementById('tiempo').textContent = tiempoRestante;
    iniciarJuego();
}

document.addEventListener('DOMContentLoaded', () => {
    iniciarJuego();
    document.querySelector('.reiniciar-btn').addEventListener('click', reiniciarJuego);
});