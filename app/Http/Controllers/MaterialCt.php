<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialCt extends Controller
{
    public function create()
    {
        return view('Biblioteca/agregarMat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'archivo' => 'required|file|mimes:pdf|max:2048' // Solo archivos PDF, máximo 2 MB
        ]);

        // Almacenar el archivo subido en la carpeta 'public/material'
        $path = $request->file('archivo')->store('material', 'public');

        return back()->with('success', 'Material agregado exitosamente.');
    }
}
