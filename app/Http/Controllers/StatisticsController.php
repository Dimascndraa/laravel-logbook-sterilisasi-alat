<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function statistics_flot()
    {
        return view('pages.statistics.statistics_flot');
    }
    public function statistics_chartjs()
    {
        return view('pages.statistics.statistics_chartjs');
    }
    public function statistics_chartist()
    {
        return view('pages.statistics.statistics_chartist');
    }
    public function statistics_c3()
    {
        return view('pages.statistics.statistics_c3');
    }
    public function statistics_peity()
    {
        return view('pages.statistics.statistics_peity');
    }
    public function statistics_sparkline()
    {
        return view('pages.statistics.statistics_sparkline');
    }
    public function statistics_easypiechart()
    {
        return view('pages.statistics.statistics_easypiechart');
    }
    public function statistics_dygraph()
    {
        return view('pages.statistics.statistics_dygraph');
    }
}
