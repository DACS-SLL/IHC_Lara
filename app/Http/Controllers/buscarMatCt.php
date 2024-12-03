<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class buscarMatCt extends Controller
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
        $path = $request->file('archivo')->storeAs('material', $request->titulo . '.pdf', 'public');

        return back()->with('success', 'Material agregado exitosamente.');
    }

    public function buscar(Request $request)
    {
        $query = $request->input('query');
        $files = Storage::disk('public')->files('material');
        $resultados = [];

        foreach ($files as $file) {
            if (stripos($file, $query) !== false) {
                $resultados[] = $file;
            }
        }

        return view('Biblioteca/buscarMat', compact('resultados'));
    }
}
