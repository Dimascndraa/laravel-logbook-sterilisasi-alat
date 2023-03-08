<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings_how_it_works()
    {
        return view('pages.settings.settings_how_it_works');
    }
    public function settings_layout_options()
    {
        return view('pages.settings.settings_layout_options');
    }
    public function settings_theme_modes()
    {
        return view('pages.settings.settings_theme_modes');
    }
    public function settings_skin_options()
    {
        return view('pages.settings.settings_skin_options');
    }
    public function settings_saving_db()
    {
        return view('pages.settings.settings_saving_db');
    }
}
