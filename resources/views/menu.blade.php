<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <style>
        /* Estilos generales */
        body {
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: cover;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            height: 50px;
        }

        main {
            padding: 50px;
            text-align: center;
        }

        .menu-container {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        .menu-item {
            text-align: center;
            width: 250px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        .menu-item button {
            background-color: #9b59b6;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 15px;
            transition: background 0.3s ease;
        }

        .menu-item button:hover {
            background-color: #8e44ad;
        }

        .menu-item img {
            width: 200px;
            height: 200px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans m-0 p-0">
    <div class="container mx-auto text-center p-5">
        <header class="flex items-center justify-between bg-white p-4 shadow-md">
            <img src="{{ asset('images/logo.png') }}" alt="Logo InnovEduca" class="h-12">
            <h1 class="text-indigo-700 text-5xl font-bold ml-4">
                Sesión de Aprendizaje
            </h1>
        </header> 
        <main>
            <div class="menu-container">
                <div class="menu-item">
                    <button onclick="window.location='{{ route('sesiones.index') }}'">Reportes</button>
                    <img src="{{ asset('images/tarea.png') }}" alt="Reportes">
                </div>
                <div class="menu-item">
                    <button onclick="window.location='{{ route('sesiones.index') }}'">Sesiones</button>
                    <img src="{{ asset('images/sesiones.png') }}" alt="Sesiones">
                </div>
                <div class="menu-item">
                    <button onclick="window.location='{{ route('sesiones.index') }}'">Biblioteca</button>
                    <img src="{{ asset('images/biblioteca.png') }}" alt="Biblioteca">
                </div>
            </div>
        </main>
    </div>
</body>
</html>
