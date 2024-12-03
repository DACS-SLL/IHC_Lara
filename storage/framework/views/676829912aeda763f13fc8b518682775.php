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
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans m-0 p-0">
    <div class="container mx-auto text-center p-5">
        <!-- Encabezado -->
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <div class="flex items-center">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo InnovEduca" class="h-12">
                <h1 class="text-indigo-700 text-5xl font-bold ml-4">Plantillas</h1>
            </div>
            <a href="<?php echo e(route('menu')); ?>" class="flex items-center">
                <img src="<?php echo e(asset('images/home.png')); ?>" alt="Home" class="h-12 w-12 mr-2">
                <span class="text-indigo-700 text-xl font-bold">Menú</span>
            </a>
        </header>        
        <main class="mt-10">
            <h2 class="text-5xl text-purple-600 font-bold mb-9">Selecciona una Plantilla</h2>
            <div class="grid grid-cols-3 gap-8 mx-auto mt-5">
                <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white shadow-lg rounded-lg p-5 flex flex-col items-center">
                    <!-- Imagen previa -->
                    <img src="<?php echo e(asset('images/templates/' . $template['image'])); ?>" alt="<?php echo e($template['name']); ?>" class="h-48 w-36 object-cover mb-3">
                    
                    <!-- Nombre de la plantilla -->
                    <h3 class="text-lg font-bold text-gray-700 mb-3"><?php echo e($template['name']); ?></h3>
                    
                    <!-- Botones de vista previa y descarga -->
                    <div class="flex gap-4">
                        <!-- Botón de vista previa -->
                        <button onclick="showPreview('<?php echo e(asset('pdfs/' . $template['file'])); ?>')" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">
                            Vista previa
                        </button>

                        <!-- Botón de descarga -->
                        <a href="<?php echo e(asset('pdfs/' . $template['file'])); ?>" download class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Descargar
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- Botón Personalizar -->
            <a href="<?php echo e(route('sesiones.registro')); ?>" class="bg-pink-500 text-white px-4 py-2 mt-8 rounded-lg text-xl font-bold inline-block">
                Personalizar
            </a>
        </main>
        <!-- Botón de retroceso -->
        <div class="boton-regresar mt-10">
            <a href="<?php echo e(route('sesiones.index')); ?>" class="flex items-center">
                <img src="<?php echo e(asset('images/flechaIzq.png')); ?>" alt="Regresar" class="h-16 w-16 mr-2">
            </a>
        </div>
    </div>

    <!-- Modal de vista previa -->
    <div id="previewModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white p-5 rounded-lg shadow-lg">
            <button onclick="closePreview()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 mb-4">Cerrar</button>
            <iframe id="previewFrame" src="" class="w-full h-96"></iframe>
        </div>
    </div>

    <script>
        function showPreview(fileUrl) {
            document.getElementById('previewFrame').src = fileUrl;
            document.getElementById('previewModal').classList.remove('hidden');
        }

        function closePreview() {
            document.getElementById('previewModal').classList.add('hidden');
        }
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Lara_IHC\InnovEduca\resources\views/Sesion/plantillas.blade.php ENDPATH**/ ?>