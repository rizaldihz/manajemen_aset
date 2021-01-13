<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailAssetPeminjamanController extends BaseController
{
    public function detail_asset_peminjaman_view()
    {
        return view('peminjaman.detail-aset-peminjaman');
    }
}
