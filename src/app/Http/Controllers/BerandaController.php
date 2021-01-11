<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends BaseController
{
    public function beranda_view()
    {
        return view('dashboard.dashboard');
    }
}
