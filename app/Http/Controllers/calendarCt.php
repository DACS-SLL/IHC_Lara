<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calendarCt extends Controller
{
    public function __invoke()
    {
        return view('Principal/calendar');
    }
}
