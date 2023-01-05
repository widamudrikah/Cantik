<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataCustemorController extends Controller
{
    public function index()
    {
        $custemor = User::where('role', 3)->get();
        return view('admin.user.custemor', [
            'custemor'  => $custemor,
        ]);
    }

}
