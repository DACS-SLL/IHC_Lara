<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('<?php echo e(asset('images/FondoP.png')); ?>');
            background-size: 100% 100%;
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

        <!-- Contenido principal -->
        <main class="mt-10">
            <h2 class="text-5xl text-purple-600 font-bold mb-9">Juegos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-5">
                <!-- Botón y imagen de Matemáticas -->
                <div class="menu-item flex flex-col items-center">
                    <a href="<?php echo e(route('actividades.matematicas')); ?>" class="flex items-center justify-center w-full px-10 py-6 bg-blue-500 text-white text-xl rounded-lg transition duration-300 hover:bg-blue-700 ml-auto mr-auto">
                        Matemáticas
                    </a>
                    <img src="<?php echo e(asset('images/Matematicas.png')); ?>" alt="Matemáticas" class="w-72 h-64 mt-4">
                </div>

                <!-- Botón y imagen de Comunicación -->
                <div class="menu-item flex flex-col items-center">
                    <a href="<?php echo e(route('actividades.comunicacion')); ?>" class="flex items-center justify-center w-full px-10 py-6 bg-green-500 text-white text-xl rounded-lg transition duration-300 hover:bg-green-700 ml-auto mr-auto">
                        Comunicación
                    </a>
                    <img src="<?php echo e(asset('images/Comunicacion.png')); ?>" alt="Comunicación" class="w-64 h-64 mt-4">
                </div>

                <!-- Botón y imagen de Ciencias -->
                <div class="menu-item flex flex-col items-center">
                    <a href="<?php echo e(route('actividades.ciencias')); ?>" class="flex items-center justify-center w-full px-10 py-6 bg-red-500 text-white text-xl rounded-lg transition duration-300 hover:bg-red-700 ml-auto mr-auto">
                        Ciencia
                    </a>
                    <img src="<?php echo e(asset('images/Ciencias.png')); ?>" alt="Ciencia" class="w-64 h-64 mt-4">
                </div>
            </div>
        </main>

        <!-- Botón de retroceso -->
        <div>
            <a href="<?php echo e(route('sesiones.index')); ?>" class="flex items-center">
                <img src="<?php echo e(asset('images/flechaIzq.png')); ?>" alt="Regresar" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Lara_IHC\InnovEduca\resources\views/ActividadesCarp/ActividadesSesion.blade.php ENDPATH**/ ?>