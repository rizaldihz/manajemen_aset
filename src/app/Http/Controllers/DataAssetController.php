<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataAssetController extends Controller
{
    public function dataasset_view()
    {
        return view('dashboard.data-aset');
    }
}
