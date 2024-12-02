<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sesionCt;
use App\Http\Controllers\LoginCt;
use App\Http\Controllers\recursosCt;
use App\Http\Controllers\PlantillasCt;

Route::get('/', [LoginCt::class, 'login'])->name('login');
Route::post('/login', [LoginCt::class, 'processLogin'])->name('login.process');
Route::get('/menu', [LoginCt::class, 'menuPrincipal'])->name('menu');

Route::get('/sesion', sesionCt::class)->name('sesiones.index');
Route::get('/actividades', [sesionCt::class, "showActividades"])->name('actividades');

Route::get('/plantillas', PlantillasCt::class)->name('plantillas');
Route::get('/plantillas/registrar-sesiones', [PlantillasCt::class, "registro"])->name('sesiones.registro');
Route::post('/plantillas/registrar-sesiones', [PlantillasCt::class, 'store'])->name('sesiones.store');

Route::get('/multimedia', recursosCt::class)->name('recursos.index');







