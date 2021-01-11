<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailAssetController extends BaseController
{
    public function detail_asset_view()
    {
        return view('dashboard.detail-aset');
    }
}
