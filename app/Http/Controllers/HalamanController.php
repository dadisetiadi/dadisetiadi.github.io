<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function dashboard()
    {
        
        return view('dashboard');
    }
}

