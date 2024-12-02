<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCt;
use App\Http\Controllers\sesionCt;
use App\Http\Controllers\LoginCt;
use App\Http\Controllers\recursosCt;
use App\Http\Controllers\PlantillasCt;
use App\Http\Controllers\registrarSesionesCt;

Route::get('/', [LoginCt::class, 'login'])->name('login');
Route::post('/login', [LoginCt::class, 'processLogin'])->name('login.process');
Route::get('/menu', [LoginCt::class, 'menuPrincipal'])->name('menu');

Route::get('/sesion', sesionCt::class)->name('sesiones.index');
Route::get('/actividades', [sesionCt::class, "showActividades"])->name('actividades');

Route::get('/plantillas', PlantillasCt::class)->name('plantillas');
Route::post('/plantillas/registrar-sesiones', registrarSesionesCt::class)->name('sesiones.reg');


Route::get('/multimedia', recursosCt::class)->name('recursos.index');







