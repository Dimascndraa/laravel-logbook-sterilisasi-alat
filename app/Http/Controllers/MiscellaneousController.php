<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
    public function miscellaneous_fullcalendar()
    {
        return view('pages.miscellaneous.miscellaneous_fullcalendar');
    }
    public function miscellaneous_lightgallery()
    {
        return view('pages.miscellaneous.miscellaneous_lightgallery');
    }
}
