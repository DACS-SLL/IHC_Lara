// resources/js/ciencias.js

const preguntas = [
    {
        pregunta: "¿De qué color es el cielo durante el día?",
        opciones: ["Azul", "Rojo", "Verde", "Amarillo"],
        respuestaCorrecta: "Azul"
    },
    {
        pregunta: "¿De dónde viene el sol por la mañana?",
        opciones: ["Del norte", "Del sur", "Del este", "Del oeste"],
        respuestaCorrecta: "Del este"
    },
    {
        pregunta: "¿Qué crees que pasa cuando una planta no recibe agua?",
        opciones: ["Crecera más rápido", "Se pondrá triste", "Se morirá", "Se hace más grande"],
        respuestaCorrecta: "Se morirá"
    },
    {
        pregunta: "¿Cómo se llama el animal que puede volar y tiene plumas?",
        opciones: ["Perro", "Gato", "Pájaro", "Pez"],
        respuestaCorrecta: "Pájaro"
    },
    {
        pregunta: "¿Qué necesitas para hacer crecer una planta: agua, sol o helado?",
        opciones: ["Agua", "Helado", "Sol", "Jugo"],
        respuestaCorrecta: "Agua"
    }    
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