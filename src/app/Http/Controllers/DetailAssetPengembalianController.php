<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailAssetPengembalianController extends Controller
{
    public function detail_asset_pengembalian_view()
    {
        return view('dashboard.detail-aset-pengembalian');
    }
}
