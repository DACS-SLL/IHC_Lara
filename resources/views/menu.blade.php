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
<body>
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="InnovEduca" class="logo">
    </header>
    <main>
        <div class="menu-container">
            <div class="menu-item">
                <button>Reportes</button>
                <img src="{{ asset('images/tarea.png') }}" alt="Reportes">
            </div>
            <div class="menu-item">
                <button>Sesiones</button>
                <img src="{{ asset('images/sesiones.png') }}" alt="Sesiones">
            </div>
            <div class="menu-item">
                <button>Biblioteca</button>
                <img src="{{ asset('images/biblioteca.png') }}" alt="Biblioteca">
            </div>
        </div>
    </main>
</body>
</html>
