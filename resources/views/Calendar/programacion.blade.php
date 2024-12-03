<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <!-- Estilos de FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <!-- Cargar el archivo de localización en español -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales/es.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <style>
        /* Botón de retroceso en la esquina superior izquierda */
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000; /* Asegura que esté sobre el calendario */
        }

        .back-button img {
            height: 50px;
            width: 50px;
            transition: transform 0.3s ease;
        }

        .back-button img:hover {
            transform: scale(1.2); /* Agrandar la imagen al pasar el ratón */
        }

        /* Centrar el calendario y ajustar su tamaño */
        #calendar {
            max-width: 800px; /* Ancho máximo para el calendario */
            margin: 80px auto; /* Añadir margen superior para que no se superponga con el botón */
        }

        /* Líneas más gruesas en el calendario */
        .fc-daygrid-day {
            border: 2px solid #000; /* Líneas negras y gruesas */
        }
    </style>
</head>
<body>
    <!-- Botón de retroceso en la esquina izquierda -->
    <div class="back-button">
        <a href="{{ route('menu') }}" class="flex items-center justify-center">
            <img src="{{ asset('images/flechaIzq.png') }}" alt="Home">
        </a>
    </div>

    <!-- Contenedor del calendario -->
    <div id="calendar"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let calendarEl = document.getElementById('calendar');

            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'es', // Configuración para el idioma español
                selectable: true,
                editable: true,
                events: [], // Eventos manejados en frontend
                dateClick: function (info) {
                    let title = prompt("Ingrese una nota para este día:");
                    if (title) {
                        calendar.addEvent({
                            title: title,
                            start: info.dateStr,
                        });
                    }
                },
                eventClick: function (info) {
                    if (confirm("¿Eliminar este evento?")) {
                        info.event.remove();
                    }
                }
            });

            calendar.render();
        });
    </script>
</body>
</html>
