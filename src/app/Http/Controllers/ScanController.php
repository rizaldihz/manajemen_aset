<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScanController extends BaseController
{
    public function scan_view()
    {
        return view('dashboard.scan');
    }
}
