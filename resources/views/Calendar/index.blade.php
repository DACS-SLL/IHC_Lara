<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <!-- Estilos de FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <style>
        body {
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: 100% 100%;
        }
    </style>
    <style>
        /* Centrar el calendario */
        #calendar {
            max-width: 900px;
            margin: 50px auto;
        }

        /* Líneas más gruesas en el calendario */
        .fc-daygrid-day {
            border: 50px solid #000; /* Líneas negras y gruesas */
        }

 
    </style>
</head>
<body>

    <!-- Contenedor del calendario -->
    <div id="calendar"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let calendarEl = document.getElementById('calendar');

            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
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
