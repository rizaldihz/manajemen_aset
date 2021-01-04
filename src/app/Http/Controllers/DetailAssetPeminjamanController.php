<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailAssetPeminjamanController extends Controller
{
    public function detail_asset_peminjaman_view()
    {
        return view('dashboard.detail-aset-peminjaman');
    }
}
