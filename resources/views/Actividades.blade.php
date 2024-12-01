<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <!-- Estilos -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            text-align: center;
        }
        /* Encabezado con marco 3D */
        .header {
            border: 2px solid #6b47dc; /* Contorno morado */
            background-color: white;
            padding: 10px 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efecto 3D */
        }
        .header img {
            height: 50px;
        }
        .header .title {
            font-size: 28px;
            flex-grow: 1;
            text-align: center;
            font-weight: bold;
            color: #6b47dc;
        }
        .header .home-icon {
            cursor: pointer;
        }
        /* Contenedor del fondo */
        .background-container {
            background-image: url("{{ asset('images/FondoP.png') }}"); /* Imagen de fondo */
            background-size: cover; /* Cubre todo el contenedor */
            background-position: center; /* Centra la imagen */
            padding: 70px 0; /* Aumenta el espaciado superior e inferior */
            margin-top: 40px; /* Espaciado superior */
        }
        /* Contenido principal */
        .content {
            margin: 0 20px; /* Ajusta la separación */
        }
        h1 {
            font-size: 36px;
            color: #333;
        }
        /* Contenedor principal de las actividades */
        .activity-container {
            display: flex;
            justify-content: center;
            gap: 40px; /* Espaciado entre actividades */
            margin-top: 20px;
            flex-wrap: wrap; /* Permite que se ajusten en pantallas pequeñas */
        }
        /* Contenedor individual para botón e imagen */
        .activity {
            display: flex;
            flex-direction: column; /* Alinear elementos en columna */
            align-items: center; /* Centrar elementos horizontalmente */
            text-align: center; /* Opcional: Alinear texto centrado */
        }
        /* Botones */
        .button {
            background-color: #00a8e8;
            color: white;
            padding: 20px 50px; /* Ajuste del ancho con padding */
            width: 300px; /* Ancho uniforme opcional */
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 22px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Efecto 3D */
            transition: transform 0.2s;
        }
        .button:hover {
            transform: scale(1.1); /* Agranda el botón al pasar el cursor */
        }
        .button.science {
            background-color: #9c27b0;
        }
        .button.communication {
            background-color: #ff7043;
        }
        /* Imágenes asociadas */
        .activity img {
            width: 250px; /* Tamaño de la imagen */
            height: auto;
            margin-top: 15px; /* Espaciado entre el botón y la imagen */
            transition: transform 0.2s;
        }
        .activity img:hover {
            transform: scale(1.1); /* Agranda al pasar el cursor */
        }
        /* Estilo para la flecha en la parte inferior izquierda */
        .back-icon {
            position: fixed;
            bottom: 20px; /* Distancia desde la parte inferior */
            left: 20px;   /* Distancia desde la parte izquierda */
            width: 50px;  /* Tamaño de la flecha */
            height: auto;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Efecto de sombra */
            transition: transform 0.2s;
        }
        .back-icon:hover {
            transform: scale(1.1); /* Efecto de agrandamiento al pasar el cursor */
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <div class="header">
        <img src="{{ asset('images/logo.png') }}" alt="Logo de Innovaeduca">
        <div class="title">Actividades</div>
        <img src="{{ asset('images/home.jpg') }}" alt="Inicio" class="home-icon" onclick="goToHome()">
    </div>

    <!-- Contenedor con fondo para los botones e imágenes -->
    <div class="background-container">
        <div class="content">
            <h1>JUEGOS</h1>
            <div class="activity-container">
                <div class="activity">
                    <button class="button math" onclick="showMessage('Juegos de Matemáticas')">Matemática</button>
                    <img src="{{ asset('images/Matematicas.jpg') }}" alt="Matemáticas">
                </div>
                <div class="activity">
                    <button class="button science" onclick="showMessage('Juegos de Ciencias')">Ciencia</button>
                    <img src="{{ asset('images/Ciencias.jpg') }}" alt="Ciencias">
                </div>
                <div class="activity">
                    <button class="button communication" onclick="showMessage('Juegos de Comunicación')">Comunicación</button>
                    <img src="{{ asset('images/Comunicacion.jpg') }}" alt="Comunicación">
                </div>
            </div>
        </div>
    </div>

    <!-- Flecha de regreso -->
    <img src="{{ asset('images/flechaIzq.png') }}" alt="Flecha Regresar" class="back-icon" onclick="goBack()">

    <!-- Scripts -->
    <script>
        function showMessage(message) {
            alert(message);
        }

        function goToHome() {
            window.location.href = "{{ url('/') }}"; // Ajusta según tu ruta de inicio
        }

        function goBack() {
            window.history.back();  // Regresa a la página anterior
        }
    </script>
</body>
</html>
