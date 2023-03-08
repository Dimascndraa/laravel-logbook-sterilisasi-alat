<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    public function utilities_borders()
    {
        return view('pages.utilities.utilities_borders');
    }
    public function utilities_clearfix()
    {
        return view('pages.utilities.utilities_clearfix');
    }
    public function utilities_color_pallet()
    {
        return view('pages.utilities.utilities_color_pallet');
    }
    public function utilities_display_property()
    {
        return view('pages.utilities.utilities_display_property');
    }
    public function utilities_fonts()
    {
        return view('pages.utilities.utilities_fonts');
    }
    public function utilities_flexbox()
    {
        return view('pages.utilities.utilities_flexbox');
    }
    public function utilities_helpers()
    {
        return view('pages.utilities.utilities_helpers');
    }
    public function utilities_position()
    {
        return view('pages.utilities.utilities_position');
    }
    public function utilities_responsive_grid()
    {
        return view('pages.utilities.utilities_responsive_grid');
    }
    public function utilities_sizing()
    {
        return view('pages.utilities.utilities_sizing');
    }
    public function utilities_spacing()
    {
        return view('pages.utilities.utilities_spacing');
    }
    public function utilities_typography()
    {
        return view('pages.utilities.utilities_typography');
    }
}
