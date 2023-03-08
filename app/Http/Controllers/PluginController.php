<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluginController extends Controller
{
    public function plugin_faq()
    {
        return view('pages.plugin.plugin_faq');
    }
    public function plugin_waves()
    {
        return view('pages.plugin.plugin_waves');
    }
    public function plugin_pacejs()
    {
        return view('pages.plugin.plugin_pacejs');
    }
    public function plugin_smartpanels()
    {
        return view('pages.plugin.plugin_smartpanels');
    }
    public function plugin_bootbox()
    {
        return view('pages.plugin.plugin_bootbox');
    }
    public function plugin_slimscroll()
    {
        return view('pages.plugin.plugin_slimscroll');
    }
    public function plugin_throttle()
    {
        return view('pages.plugin.plugin_throttle');
    }
    public function plugin_navigation()
    {
        return view('pages.plugin.plugin_navigation');
    }
    public function plugin_i18next()
    {
        return view('pages.plugin.plugin_i18next');
    }
    public function plugin_appcore()
    {
        return view('pages.plugin.plugin_appcore');
    }
}
