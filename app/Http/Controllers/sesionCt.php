<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sesionCt extends Controller
{
    public function __invoke()
    {
        return view('Menu/sesion');
    }

    public function showPlantillas()
    {
        return view('Sesion/plantillas');
    }

    public function showActividades()
    {
    return view('Sesion/ActividadesSesion'); // Cambia a una vista más específica
    }


    public function showMultimedia()
    {
        return view("Sesion/recursos");
    }
}
