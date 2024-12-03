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
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: 100% 100%;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans m-0 p-0">
    <div class="container mx-auto text-center p-5">
        <!-- Encabezado -->
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca" class="h-12">
            </div>
            <a href="{{ route('menu') }}" class="flex items-center">
                <img src="{{ asset('images/home.png') }}" alt="Home" class="h-12 w-12 mr-2">
                <span class="text-indigo-700 text-xl font-bold">Menú</span>
            </a>
        </header>        

        <!-- Título -->
        <main class="mt-10">
            <h2 class="text-5xl text-purple-600 font-bold mb-9">Selecciona una Plantilla</h2>

            <!-- Contenedor de plantillas -->
            <div class="grid grid-cols-3 gap-8 mx-auto mt-5">
                @foreach($templates as $template)
                <div class="bg-white shadow-lg rounded-lg p-5 flex flex-col items-center">
                    <!-- Imagen previa -->
                    <img src="{{ asset('images/templates/' . $template['image']) }}" alt="{{ $template['name'] }}" class="h-48 w-36 object-cover mb-3">
                    
                    
                    <!-- Nombre de la plantilla -->
                    <h3 class="text-lg font-bold text-gray-700 mb-3">{{ $template['name'] }}</h3>
                    
                    <!-- Botones de vista previa y descarga -->
                    <div class="flex gap-4">
                        <!-- Botón de vista previa -->
                        <button onclick="showPreview('/pdfs/{{ $template['file'] }}')" 
                            class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">
                            Vista previa
                        </button>

                        <!-- Botón de descarga -->
                        <a href="{{ asset('pdfs/' . $template['file']) }}" download 
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Descargar
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Botón "Personalizar" -->
            <a href="{{ route('sesiones.registro') }}" class="bg-pink-500 text-white px-4 py-2 mt-8 rounded-lg text-xl font-bold inline-block">
                Personalizar
            </a>

            <!-- Botón de retroceso -->
            <div>
                <a href="{{ route('sesiones.index') }}" class="flex items-center mt-8">
                    <img src="{{ asset('images/flechaIzq.png') }}" alt="Regresar" class="h-16 w-16 mr-2">
                </a>
            </div>  
        </main>
    </div>

    <!-- Modal para vista previa -->
    <div id="previewModal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg p-5 max-w-3xl w-full">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Vista previa</h2>
                <button onclick="closePreview()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <iframe id="previewFrame" class="w-full h-96 border" frameborder="0"></iframe>
        </div>
    </div>

    <script>
        // Función para mostrar la vista previa de un PDF
        function showPreview(pdfUrl) {
            document.getElementById('previewFrame').src = pdfUrl;
            document.getElementById('previewModal').classList.remove('hidden');
        }

        // Función para cerrar el modal de vista previa
        function closePreview() {
            document.getElementById('previewFrame').src = '';
            document.getElementById('previewModal').classList.add('hidden');
        }
    </script>
</body>
</html>
