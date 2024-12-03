<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantillas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-image: url('<?php echo e(asset('images/FondoP.png')); ?>');
            background-size: 100% 100%;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans m-0 p-0">
    <div class="container mx-auto text-center p-5">
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <div class="flex items-center">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo InnovEduca" class="h-12">
            </div>
            <a href="<?php echo e(route('menu')); ?>" class="flex items-center">
                <img src="<?php echo e(asset('images/home.png')); ?>" alt="Home" class="h-12 w-12 mr-2">
                <span class="text-indigo-700 text-xl font-bold">Menú</span>
            </a>
        </header>        
        <main class="mt-10">
            <h2 class="text-5xl text-purple-600 font-bold mb-9">Selecciona una Plantilla</h2>
            <div class="relative flex items-center justify-center">
                <!-- Botón Izquierda -->
                <button class="absolute left-0 bg-purple-200 p-2 rounded-full" onclick="prevTemplate()">
                    <img src="<?php echo e(asset('images/flechaIzq.png')); ?>" alt="Prev" class="h-8 w-8">
                </button>
                <!-- Contenedor de Plantillas -->
                <div id="template-carousel" class="flex gap-4 overflow-x-auto mx-20">
                    <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="template-card flex-shink-0">
                            <img src="<?php echo e(asset('images/templates/' . $template['image'])); ?>" alt="<?php echo e($template['name']); ?>" class="h-full w-full object-cover">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- Botón Derecha -->
                <button class="absolute right-0 bg-purple-200 p-2 rounded-full" onclick="nextTemplate()">
                    <img src="<?php echo e(asset('images/flechaDer.png')); ?>" alt="Next" class="h-8 w-8">
                </button>
            </div>

            <!-- Botón Personalizar -->
            <a href="<?php echo e(route('sesiones.registro')); ?>" class="bg-pink-500 text-white px-4 py-2 mt-8 rounded-lg text-xl font-bold inline-block">
                Personalizar
            </a>

            <div>
                <a href="<?php echo e(route('sesiones.index')); ?>" class="flex items-center">
                    <img src="<?php echo e(asset('images/flechaIzq.png')); ?>" alt="Home" class="h-16 w-16 mr-2">
                </a>
            </div>  
        </main>
    </div>

    <script src="<?php echo e(asset('js/plantillas.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Lara_IHC\InnovEduca\resources\views/Sesion/plantillas.blade.php ENDPATH**/ ?>