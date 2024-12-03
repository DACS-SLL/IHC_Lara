// resources/js/matematicas.js

const operaciones = [
    { pregunta: "5 + 3", respuesta: "8" },
    { pregunta: "10 - 7", respuesta: "3" },
    { pregunta: "4 x 2", respuesta: "8" },
    { pregunta: "9 / 3", respuesta: "3" },
];

let tiempoRestante = 40;
let temporizador;
let preguntaActual = 0;
let turno = 'X'; // Alternar entre 'X' y 'O'

function iniciarJuego() {
    mostrarPregunta();
    actualizarTurno();
    iniciarTemporizador();
}

function iniciarTemporizador() {
    clearInterval(temporizador); // Limpiar cualquier temporizador previo
    tiempoRestante = 40; // Reiniciar el tiempo restante
    document.getElementById('tiempo').textContent = tiempoRestante;
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
    const operacion = operaciones[preguntaActual];
    document.getElementById('pregunta').textContent = operacion.pregunta;
}

function verificarRespuesta(respuesta, celda) {
    const operacion = operaciones[preguntaActual];
    if (respuesta === operacion.respuesta) {
        alert('¡Respuesta correcta!');
        celda.textContent = turno;
        turno = turno === 'X' ? 'O' : 'X'; // Alternar turno
        actualizarTurno();
        preguntaActual++;
        if (preguntaActual < operaciones.length) {
            mostrarPregunta();
            iniciarTemporizador(); // Reiniciar el temporizador para la nueva pregunta
        } else {
            alert('¡Felicidades, has completado el juego!');
            reiniciarJuego();
        }
    } else {
        alert('Respuesta incorrecta. Inténtalo de nuevo.');
    }
}

function actualizarTurno() {
    document.getElementById('turno').textContent = `Turno de: ${turno}`;
}

function reiniciarJuego() {
    clearInterval(temporizador);
    tiempoRestante = 40;
    preguntaActual = 0;
    turno = 'X';
    document.getElementById('tiempo').textContent = tiempoRestante;
    document.querySelectorAll('.celda').forEach(celda => celda.textContent = '');
    actualizarTurno();
    iniciarJuego();
}

document.addEventListener('DOMContentLoaded', () => {
    iniciarJuego();
    document.querySelectorAll('.celda').forEach(celda => {
        celda.addEventListener('click', () => {
            if (celda.textContent === '') {
                const respuesta = prompt('Introduce tu respuesta:');
                verificarRespuesta(respuesta, celda);
            }
        });
    });
});