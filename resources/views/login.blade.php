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
        }
        .logo {
            margin-top: 50px;
        }

        .logo img {
            width: 300px;
        }

        .login-container {
            width: 400px;
            margin: 20px auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            text-align: left; /* Alineación del texto */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .login-container h2 {
            text-align: center;
            color: #9b59b6;
            margin-bottom: 20px;
        }

        .login-container label {
            font-size: 14px;
            color: #9b59b6;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .login-container button {
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

        .login-container button:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <!-- Logo fuera del cuadro -->
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>

    <!-- Cuadro de inicio de sesión -->
    <div class="login-container">
        <h2>Ingrese su cuenta</h2>
        <form>
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" placeholder="Ingrese su usuario" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>

            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
