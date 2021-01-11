<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends BaseController
{
    public function report_view()
    {
        return view('dashboard.report');
    }
}
