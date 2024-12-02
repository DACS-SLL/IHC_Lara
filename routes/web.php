<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sesionCt;
use App\Http\Controllers\LoginCt;
use App\Http\Controllers\recursosCt;
use App\Http\Controllers\PlantillasCt;
use App\Http\Controllers\bibliotecaCt;

Route::get('/', [LoginCt::class, 'login'])->name('login');
Route::post('/login', [LoginCt::class, 'processLogin'])->name('login.process');
Route::get('/menu', [LoginCt::class, 'menuPrincipal'])->name('menu');
Route::get('/biblioteca', [bibliotecaCt::class, 'index'])->name('biblioteca.index');

Route::get('/sesion', sesionCt::class)->name('sesiones.index');
Route::get('/actividades', [sesionCt::class, "showActividades"])->name('actividades');

Route::get('/plantillas', PlantillasCt::class)->name('plantillas');
Route::get('/plantillas/registrar-sesiones', [PlantillasCt::class, "registro"])->name('sesiones.registro');
Route::post('/plantillas/registrar-sesiones', [PlantillasCt::class, 'store'])->name('sesiones.store');

Route::get('/multimedia', recursosCt::class)->name('recursos.index');

Route::get('/biblioteca/buscar', [BibliotecaCt::class, 'buscarMaterial'])->name('buscar.material');
Route::post('/biblioteca/buscar', [BibliotecaCt::class, 'buscarMaterialPost']);

Route::get('/biblioteca/ingresar', [BibliotecaCt::class, 'ingresarMaterial'])->name('ingresar.material');
Route::post('/biblioteca/ingresar', [BibliotecaCt::class, 'ingresarMaterialPost']);









