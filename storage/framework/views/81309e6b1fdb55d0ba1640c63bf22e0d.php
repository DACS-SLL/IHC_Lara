<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
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
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo InnovEduca" class="h-12">
            <h1 class="text-indigo-700 text-5xl font-bold ml-4">
                Biblioteca Virtual
            </h1>
        </header>

        <!-- Contenido Principal -->
        <main class="mt-10">
            <div class="flex items-center justify-center gap-10 mb-5">
                <!-- Botones -->
                <div class="flex flex-col items-start gap-4">
                    <!-- Botón Buscar Material -->
                    <a href="<?php echo e(route('buscar.material')); ?>" 
                       class="block w-full px-10 py-6 bg-purple-600 text-white text-xl rounded-lg transition duration-300 hover:bg-purple-700">
                        Buscar material
                    </a>

                    <!-- Botón Ingresar Material -->
                    <a href="<?php echo e(route('ingresar.material')); ?>" 
                       class="block w-full px-10 py-6 bg-purple-600 text-white text-xl rounded-lg transition duration-300 hover:bg-purple-700">
                        Ingresar material
                    </a>
                </div>

                <!-- Imagen del personaje -->
                <div class="flex justify-center">
                    <img src="<?php echo e(asset('images/biblioTec.png')); ?>" alt="Imagen del maestro" class="max-w-xs">
                </div>
            </div>            
        </main>

        <!-- Botón de retroceso -->
        <div>
            <a href="<?php echo e(route('menu')); ?>" class="flex items-center">
                <img src="<?php echo e(asset('images/flechaIzq.png')); ?>" alt="Home" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Lara_IHC\InnovEduca\resources\views/Menu\biblioteca.blade.php ENDPATH**/ ?>