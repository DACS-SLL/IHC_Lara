<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bibliotecaCt extends Controller
{
    public function index(){
        return view('Menu\biblioteca');
    }
    // Método para mostrar la vista de búsqueda de material
    public function buscarMaterial()
    {
        return view('biblioteca.buscar'); // Crear la vista buscar.blade.php
    }

    // Método para mostrar la vista de ingreso de material
    public function ingresarMaterial()
    {
        return view('biblioteca.ingresar'); // Crear la vista ingresar.blade.php
    }

    // Método para procesar la búsqueda de material
    public function buscarMaterialPost(Request $request)
    {
        $busqueda = $request->input('query');
        // Aquí puedes agregar lógica para buscar en la base de datos
        return back()->with('success', 'Búsqueda realizada: ' . $busqueda);
    }

    // Método para procesar el ingreso de material
    public function ingresarMaterialPost(Request $request)
    {
        $material = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        // Guardar el material en la base de datos o en otro almacenamiento
        // Material::create($material); // Si tienes un modelo llamado Material

        return back()->with('success', 'Material ingresado exitosamente.');
    }
}
