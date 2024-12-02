<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillasCt extends Controller
{
    public function __invoke()
    {
        $templates = [
            ['name' => 'Plantilla 1', 'image' => 'plantilla1.png'],
            ['name' => 'Plantilla 2', 'image' => 'plantilla2.png'],
            ['name' => 'Plantilla 3', 'image' => 'plantilla3.png']
        ];

        return view('Sesion/plantillas', compact('templates'));
    }
}
