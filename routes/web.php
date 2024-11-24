<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeCt;

Route::get('/', [HomeCt::class, 'index']);
