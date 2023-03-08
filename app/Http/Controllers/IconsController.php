<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconsController extends Controller
{
    public function icons_fontawesome_light()
    {
        return view('pages.icons.icons_fontawesome_light');
    }
    public function icons_fontawesome_regular()
    {
        return view('pages.icons.icons_fontawesome_regular');
    }
    public function icons_fontawesome_solid()
    {
        return view('pages.icons.icons_fontawesome_solid');
    }
    public function icons_fontawesome_brand()
    {
        return view('pages.icons.icons_fontawesome_brand');
    }
    public function icons_nextgen_general()
    {
        return view('pages.icons.icons_nextgen_general');
    }
    public function icons_nextgen_base()
    {
        return view('pages.icons.icons_nextgen_base');
    }
    public function icons_stack_showcase()
    {
        return view('pages.icons.icons_stack_showcase');
    }
    public function icons_stack_generate()
    {
        return view('pages.icons.icons_stack_generate');
    }
}
