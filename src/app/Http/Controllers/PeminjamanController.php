<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function peminjaman_view()
    {
        return view('peminjaman.peminjaman');
    }
}
