<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sesionCt;
use App\Http\Controllers\LoginCt;
use App\Http\Controllers\recursosCt;
use App\Http\Controllers\PlantillasCt;
use App\Http\Controllers\bibliotecaCt;
use App\Http\Controllers\ActividadesCt;
use App\Http\Controllers\calendarCt;

// Rutas generales
Route::get('/', [LoginCt::class, 'login'])->name('login');
Route::post('/login', [LoginCt::class, 'processLogin'])->name('login.process');
Route::get('/menu', [LoginCt::class, 'menuPrincipal'])->name('menu');

// Rutas para biblioteca
Route::get('/biblioteca', [bibliotecaCt::class, 'index'])->name('biblioteca.index');
Route::get('/biblioteca/buscar', [bibliotecaCt::class, 'buscarMaterial'])->name('buscar.material');
Route::post('/biblioteca/buscar', [bibliotecaCt::class, 'buscarMaterialPost']);
Route::get('/biblioteca/ingresar', [bibliotecaCt::class, 'ingresarMaterial'])->name('ingresar.material');
Route::post('/biblioteca/ingresar', [bibliotecaCt::class, 'ingresarMaterialPost']);

// Rutas para sesión
Route::get('/sesion', [sesionCt::class, '__invoke'])->name('sesiones.index');
Route::get('/sesion/plantillas', [sesionCt::class, 'showPlantillas'])->name('sesiones.plantillas');
Route::get('/sesion/multimedia', [sesionCt::class, 'showMultimedia'])->name('sesiones.multimedia');

// Ajustar la ruta de actividades de `sesionCt`
Route::get('/sesion/actividades', [sesionCt::class, 'showActividades'])->name('sesiones.actividades');

// Rutas específicas para actividades
Route::get('/actividades', [ActividadesCt::class, 'index'])->name('actividades');
Route::get('/actividades/matematicas', [ActividadesCt::class, 'matematicas'])->name('actividades.matematicas');
Route::get('/actividades/comunicacion', [ActividadesCt::class, 'comunicacion'])->name('actividades.comunicacion');
Route::get('/actividades/ciencias', [ActividadesCt::class, 'ciencias'])->name('actividades.ciencias');

// Rutas para plantillas
Route::get('/plantillas', [PlantillasCt::class, '__invoke'])->name('plantillas');
Route::get('/plantillas/registrar-sesiones', [PlantillasCt::class, 'registro'])->name('sesiones.registro');
Route::post('/plantillas/registrar-sesiones', [PlantillasCt::class, 'store'])->name('sesiones.store');

// Ruta para multimedia
Route::get('/multimedia', [recursosCt::class, '__invoke'])->name('recursos.index');

//Ruta para calendar
Route::get('/calendar', calendarCt::class)->name('Calendar.index');