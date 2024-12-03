<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            background-image: url('{{ asset('images/FondoP.png') }}');
            background-size: cover;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Asegura que el contenido se centre verticalmente */
            overflow: hidden;
        }

        /* Animación del mensaje */
        .mensaje {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            font-size: 1.5rem;
            color: #9b59b6;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            opacity: 1;
            transition: opacity 1s ease-out;
        }

        /* Estilo del formulario de login */
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
            width: 100%;
            max-width: 400px;
            display: none; /* Inicialmente oculto */
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 70%;
            max-width: 300px;
        }

        h2 {
            text-align: center;
            color: #9b59b6;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        label {
            font-size: 14px;
            color: #9b59b6;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #2980b9;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
            }

            h2 {
                font-size: 1.5rem;
            }

            input, button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- Mensaje que aparece al inicio -->
    <div id="mensaje" class="mensaje">
        <p>¡Recuerda usar audífonos!</p>
    </div>

    <!-- Formulario de inicio de sesión -->
    <div class="login-container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        
        <h2>Ingrese su cuenta</h2>
        <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <div>
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>

    <script>
        // Mostrar mensaje por 3 segundos y luego ocultarlo
        setTimeout(function() {
            document.getElementById('mensaje').style.opacity = 0;
        }, 3000); // El mensaje desaparece después de 3 segundos

        // Mostrar el formulario de login después del mensaje
        setTimeout(function() {
            document.querySelector('.login-container').style.display = 'block';
        }, 3000); // El formulario aparece después de 3 segundos
    </script>
</body> 
</html>
