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

    public function registro()
    {
        return view('RegistroS/registrar-sesiones');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'seccion' => 'required|string|max:255',
            'archivo' => 'required|file|max:2048' // Máximo 2 GB
        ]);

        // Almacenar el archivo subido
        //$path = $request->file('archivo')->store('archivos', 'public');

        // Guardar la sesión en la base de datos (opcional)
        // Sesion::create([
        //     'nombre' => $request->nombre,
        //     'seccion' => $request->seccion,
        //     'archivo' => $path
        // ]);

        return back()->with('success', 'Sesión registrada exitosamente.');
    }
}
