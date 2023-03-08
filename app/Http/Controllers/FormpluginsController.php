<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormpluginsController extends Controller
{
    public function form_plugins_colorpicker()
    {
        return view('pages.formplugins.form_plugins_colorpicker');
    }
    public function form_plugins_datepicker()
    {
        return view('pages.formplugins.form_plugins_datepicker');
    }
    public function form_plugins_daterange_picker()
    {
        return view('pages.formplugins.form_plugins_daterange_picker');
    }
    public function form_plugins_dropzone()
    {
        return view('pages.formplugins.form_plugins_dropzone');
    }
    public function form_plugins_ionrangeslider()
    {
        return view('pages.formplugins.form_plugins_ionrangeslider');
    }
    public function form_plugins_inputmask()
    {
        return view('pages.formplugins.form_plugins_inputmask');
    }
    public function form_plugin_imagecropper()
    {
        return view('pages.formplugins.form_plugin_imagecropper');
    }
    public function form_plugin_select2()
    {
        return view('pages.formplugins.form_plugin_select2');
    }
    public function form_plugin_summernote()
    {
        return view('pages.formplugins.form_plugin_summernote');
    }
}
