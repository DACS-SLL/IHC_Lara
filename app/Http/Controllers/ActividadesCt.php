<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadesCt extends Controller
{
    public function index()
    {
        return view('ActividadesCarp.ActividadesSesion'); // Vista principal de actividades
    }

    public function matematicas()
    {
        return view('ActividadesCarp.Matematicas'); // Vista de Matemáticas
    }

    public function comunicacion()
    {
        return view('ActividadesCarp.Comunicacion'); // Vista de Comunicación
    }

    public function ciencias()
    {
        return view('ActividadesCarp.Ciencias'); // Vista de Ciencias
    }
}
