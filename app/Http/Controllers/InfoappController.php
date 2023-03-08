<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoappController extends Controller
{
    public function info_app_docs()
    {
        return view('pages.infoapp.info_app_docs');
    }
    public function info_app_licensing()
    {
        return view('pages.infoapp.info_app_licensing');
    }
    public function info_app_flavors()
    {
        return view('pages.infoapp.info_app_flavors');
    }
}
