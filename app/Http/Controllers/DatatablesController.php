<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    public function datatables_basic()
    {
        return view('pages.datatables.datatables_basic');
    }
    public function datatables_autofill()
    {
        return view('pages.datatables.datatables_autofill');
    }
    public function datatables_buttons()
    {
        return view('pages.datatables.datatables_buttons');
    }
    public function datatables_export()
    {
        return view('pages.datatables.datatables_export');
    }
    public function datatables_colreorder()
    {
        return view('pages.datatables.datatables_colreorder');
    }
    public function datatables_columnfilter()
    {
        return view('pages.datatables.datatables_columnfilter');
    }
    public function datatables_fixedcolumns()
    {
        return view('pages.datatables.datatables_fixedcolumns');
    }
    public function datatables_fixedheader()
    {
        return view('pages.datatables.datatables_fixedheader');
    }
    public function datatables_keytable()
    {
        return view('pages.datatables.datatables_keytable');
    }
    public function datatables_responsive()
    {
        return view('pages.datatables.datatables_responsive');
    }
    public function datatables_responsive_alt()
    {
        return view('pages.datatables.datatables_responsive_alt');
    }
    public function datatables_rowgroup()
    {
        return view('pages.datatables.datatables_rowgroup');
    }
    public function datatables_rowreorder()
    {
        return view('pages.datatables.datatables_rowreorder');
    }
    public function datatables_scroller()
    {
        return view('pages.datatables.datatables_scroller');
    }
    public function datatables_select()
    {
        return view('pages.datatables.datatables_select');
    }
    public function datatables_alteditor()
    {
        return view('pages.datatables.datatables_alteditor');
    }
}
