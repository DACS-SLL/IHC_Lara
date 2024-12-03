<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCt extends Controller
{
    // Método para mostrar el formulario de login
    public function login()
    {
        return view('Principal/login');
    }

    // Método para procesar el login
    public function processLogin(Request $request)
    {
        // Aquí podrías validar las credenciales (esto es solo un ejemplo básico)
        $username = $request->input('usuario');
        $password = $request->input('password');

        if ($username === 'admin' && $password === '123456') {
            // Si las credenciales son correctas, redirige al menú principal
            return redirect()->route('menu');
        }

        // Si no son correctas, regresa con un mensaje de error - Esto se tiene que mejorar, no manda el error
        return back()->with('error', 'Usuario o contraseña incorrectos');
    }

    // Método para mostrar el menú principal
    public function menuPrincipal()
    {
        // Opciones del menú principal
        $opciones = [
            [
                'nombre' => 'Calendar',
                'imagen' => asset('images/tarea.png'),
            ],
            [
                'nombre' => 'Sesiones',
                'imagen' => asset('images/sesiones.png'),
            ],
            [
                'nombre' => 'Biblioteca',
                'imagen' => asset('images/biblioteca.png'),
            ],
        ];

        return view('Principal/menu', compact('opciones'));
    }
}
