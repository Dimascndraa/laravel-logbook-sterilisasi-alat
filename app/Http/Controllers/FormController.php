<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form_basic_inputs()
    {
        return view('pages.form.form_basic_inputs');
    }
    public function form_checkbox_radio()
    {
        return view('pages.form.form_checkbox_radio');
    }
    public function form_input_groups()
    {
        return view('pages.form.form_input_groups');
    }
    public function form_validation()
    {
        return view('pages.form.form_validation');
    }
    public function form_elements()
    {
        return view('pages.form.form_elements');
    }
    public function form_samples()
    {
        return view('pages.form.form_samples');
    }
}
