<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCt;
use App\Http\Controllers\sesionCt;
use App\Http\Controllers\LoginController;

Route::get('/sesion', sesionCt::class)->name('sesiones.index');

Route::get('/plantillas', [sesionCt::class, "showPlantillas"])->name('plantillas');

Route::get('/actividades', [sesionCt::class, "showActividades"])->name('actividades');

Route::get('/multimedia', [sesionCt::class, "showMultimedia"])->name('multimedia');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');
Route::get('/menu', [LoginController::class, 'menuPrincipal'])->name('menu');


