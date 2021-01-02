<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile_view()
    {
        return view('dashboard.profile');
    }
}
