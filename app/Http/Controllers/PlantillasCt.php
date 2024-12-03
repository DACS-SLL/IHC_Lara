<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillasCt extends Controller
{
    public function __invoke()
    {
        // Array de plantillas con sus nombres, imágenes y archivos PDF
        $templates = [
            ['name' => 'Plantilla 1', 'image' => 'templates/Plantilla1.png', 'file' => 'pdfs/Plantilla1.pdf'],
            ['name' => 'Plantilla 2', 'image' => 'templates/Plantilla2.png', 'file' => 'pdfs/Plantilla2.pdf'],
            ['name' => 'Plantilla 3', 'image' => 'templates/Plantilla3.png', 'file' => 'pdfs/Plantilla3.pdf'],
            ['name' => 'Plantilla 4', 'image' => 'templates/Plantilla4.png', 'file' => 'pdfs/Plantilla4.pdf'],
            ['name' => 'Plantilla 5', 'image' => 'templates/Plantilla5.png', 'file' => 'pdfs/Plantilla5.pdf'],
            ['name' => 'Plantilla 6', 'image' => 'templates/Plantilla6.png', 'file' => 'pdfs/Plantilla6.pdf'],
        ];               

        // Retorna la vista con las plantillas
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
            'archivo' => 'required|file|max:2048' // Máximo 2 MB
        ]);

        // Almacenar el archivo subido
        $path = $request->file('archivo')->store('archivos', 'public');

        // Guardar la sesión en la base de datos (opcional)
        // Sesion::create([
        //     'nombre' => $request->nombre,
        //     'seccion' => $request->seccion,
        //     'archivo' => $path
        // ]);

        return back()->with('success', 'Sesión registrada exitosamente.');
    }
}
