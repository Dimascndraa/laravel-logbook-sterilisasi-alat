<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function tables_basic()
    {
        return view('pages.tables.tables_basic');
    }
    public function tables_generate_style()
    {
        return view('pages.tables.tables_generate_style');
    }
}
