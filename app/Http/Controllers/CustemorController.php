<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustemorController extends Controller
{
    public function index()
    {
        return view('custemor.dashboard-custemor');
    }
}
