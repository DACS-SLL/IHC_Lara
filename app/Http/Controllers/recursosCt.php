<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recursosCt extends Controller
{
    public function __invoke()
    {
        return view('recursos');
    }
}