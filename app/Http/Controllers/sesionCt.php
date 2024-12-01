<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sesionCt extends Controller
{
    public function __invoke()
    {
        return view('sesion');
    }

    public function showPlantillas()
    {
        return view('welcome');
    }

    public function showActividades()
    {
        return view('Actividades');
    }

    public function showMultimedia()
    {
        return "Vereos multimedia";
    }
}
