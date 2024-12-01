<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeCt;
use  App\Http\Controllers\sesionCt;
use App\Http\Controllers\LoginController;

Route::get('/', sesionCt::class);

Route::get('/plantillas', [sesionCt::class, "showPlantillas"])->name('plantillas');

Route::get('/actividades', [sesionCt::class, "showActividades"])->name('actividades');

Route::get('/multimedia', [sesionCt::class, "showMultimedia"])->name('multimedia');

Route::get('/home', [HomeCt::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
