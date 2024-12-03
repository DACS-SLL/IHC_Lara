<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calendarCt extends Controller
{
    public function __invoke()
    {
        return view('calendar.index'); // Vista del calendario
    }
}
