<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <style>
        body{
            background-image: url('<?php echo e(asset('images/FondoP.png')); ?>');
            background-size: 100% 100%;
        }
    </style>    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans m-0 p-0">
    <div class="container mx-auto text-center p-5">
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo InnovEduca" class="h-12">
            <h1 class="text-indigo-700 text-5xl font-bold ml-4">
                Menú Principal
            </h1>
        </header>        
        <main class="mt-10">
            <div class="flex items-center justify-center gap-10 mb-5">
                <div class="flex items-start gap-14">
                    <div class="menu-item flex flex-col items-center">
                        <button class="px-8 py-4 mb-4 text-white bg-purple-600 text-2xl rounded hover:bg-purple-700" onclick="window.location='<?php echo e(route('sesiones.index')); ?>'">Reportes</button>
                        <img src="<?php echo e(asset('images/tarea.png')); ?>" alt="Reportes" class="w-48 h-48">
                    </div>
                    <div class="menu-item flex flex-col items-center">
                        <button class="px-8 py-4 mb-4 text-white bg-purple-600 text-2xl rounded hover:bg-purple-700" onclick="window.location='<?php echo e(route('sesiones.index')); ?>'">Sesiones</button>
                        <img src="<?php echo e(asset('images/sesiones.png')); ?>" alt="Sesiones" class="w-48 h-48">
                    </div>
                    <div class="menu-item flex flex-col items-center">
                        <button class="px-8 py-4 mb-4 text-white bg-purple-600 text-2xl rounded hover:bg-purple-700" onclick="window.location='<?php echo e(route('sesiones.index')); ?>'">Biblioteca</button>
                        <img src="<?php echo e(asset('images/biblioteca.png')); ?>" alt="Biblioteca" class="w-48 h-48">
                    </div>
                </div>
            </div>            
        </main>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Lara_IHC\InnovEduca\resources\views/menu.blade.php ENDPATH**/ ?>