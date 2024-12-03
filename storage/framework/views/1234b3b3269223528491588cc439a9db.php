<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos</title>
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
            <h2 class="text-5xl text-purple-600 font-bold mb-9">Multimedia</h2>
            <div class="flex flex-wrap justify-center gap-10">
                <div class="mb-10">
                    <h2 class="text-blue-600 text-2xl font-bold mb-4">Videos</h2>
                    <div class="flex items-center justify-center gap-4">
                        <button class="bg-gray-200 p-2 rounded-full" onclick="prevVideo()">
                            <img src="<?php echo e(asset('images/flechaIzq.png')); ?>" alt="Prev" class="h-8 w-8">
                        </button>
                        <iframe id="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/YWAJF8esH4s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <button class="bg-gray-200 p-2 rounded-full" onclick="nextVideo()">
                            <img src="<?php echo e(asset('images/flechaDer.png')); ?>" alt="Next" class="h-8 w-8">
                        </button>
                    </div>
                </div>

                <!-- Sección de Canciones -->
                <div class="mb-10">
                    <h2 class="text-pink-600 text-2xl font-bold mb-4">Canciones</h2>
                    <div class="flex items-center justify-center gap-4">
                        <button class="bg-gray-200 p-2 rounded-full" onclick="prevTrack()">
                            <img src="<?php echo e(asset('images/flechaIzq.png')); ?>" alt="Prev" class="h-8 w-8">
                        </button>
                        <iframe id="spotify-iframe" src="https://open.spotify.com/embed/track/5FUPss7Xsr9hnxuIUe9b01?si=b6fdad7d40b04fa2" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        <button class="bg-gray-200 p-2 rounded-full" onclick="nextTrack()">
                            <img src="<?php echo e(asset('images/flechaDer.png')); ?>" alt="Next" class="h-8 w-8">
                        </button>
                    </div>
                </div>
            </div> 
            <div>
                <a href="<?php echo e(route('sesiones.index')); ?>" class="flex items-center">
                    <img src="<?php echo e(asset('images/flechaIzq.png')); ?>" alt="Home" class="h-16 w-16 mr-2">
                </a>
            </div>   
        </main>
    </div>
    <script src="<?php echo e(asset('js/videos.js')); ?>"></script>
    <script src="<?php echo e(asset('js/spotify.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Lara_IHC\InnovEduca\resources\views/recursos.blade.php ENDPATH**/ ?>