<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillasCt extends Controller
{
    public function __invoke()
    {
        $templates = [
            ['name' => 'Plantilla 1', 'image' => 'teacher.png'],
            ['name' => 'Plantilla 2', 'image' => 'teacher.png'],
            ['name' => 'Plantilla 3', 'image' => 'teacher.png']
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
            'archivo' => 'required|file|mimes:pdf|max:2048' // Solo archivos PDF, máximo 2 MB
        ]);

        // Almacenar el archivo subido en la carpeta 'public/archivos'
        $path = $request->file('archivo')->store('archivos', 'public');

        // (Opcional) Guardar la sesión en la base de datos
        // Sesion::create([
        //     'nombre' => $request->nombre,
        //     'seccion' => $request->seccion,
        //     'archivo' => $path
        // ]);

        return back()->with('success', 'Sesión registrada exitosamente.');
    }
}
