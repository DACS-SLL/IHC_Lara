<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Comunicación - Adivina la Palabra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('<?php echo e(asset('images/FondoP.png')); ?>');
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
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo InnovEduca" class="h-12">
            </div>
            <a href="<?php echo e(route('menu')); ?>" class="flex items-center">
                <img src="<?php echo e(asset('images/home.png')); ?>" alt="Home" class="h-12 w-12 mr-2">
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
        <a href="<?php echo e(route('actividades')); ?>" class="fixed bottom-4 left-4">
            <img src="<?php echo e(asset('images/flechaIzq.png')); ?>" alt="Regresar" class="h-16 w-16">
        </a>
    </div>

    <script>
        // Palabra correcta
        const palabraCorrecta = "gato";

        // Función para verificar la respuesta
        function verificarRespuesta() {
            const respuestaUsuario = document.getElementById('respuesta').value.toLowerCase();
            const resultadoDiv = document.getElementById('resultado');

            if (respuestaUsuario === palabraCorrecta) {
                resultadoDiv.textContent = "¡Correcto! 🎉";
                resultadoDiv.style.color = "green";
            } else {
                resultadoDiv.textContent = "¡Intenta nuevamente! ❌";
                resultadoDiv.style.color = "red";
            }
        }
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Lara_IHC\InnovEduca\resources\views/ActividadesCarp/Comunicacion.blade.php ENDPATH**/ ?>