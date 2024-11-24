<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeCt;
use  App\Http\Controllers\sesionCt;

Route::get('/', sesionCt::class);

Route::get('/plantillas', [sesionCt::class, "showPlantillas"])->name('plantillas');

Route::get('/actividades', [sesionCt::class, "showActividades"])->name('actividades');

Route::get('/multimedia', [sesionCt::class, "showMultimedia"])->name('multimedia');
