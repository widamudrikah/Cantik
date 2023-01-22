<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustemorController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $nama    = Auth::user()->name;

        $transaksi_pending = Transaksi::where('custemor_id', $user_id)->where('status', 1)
        ->count();
        $transaksi_success = Transaksi::where('custemor_id', $user_id)->where('status', 2)
        ->count();

        return view('custemor.dashboard-custemor', [
            'nama'                  => $nama,
            'transaksi_pending'     => $transaksi_pending,
            'transaksi_success'     => $transaksi_success,
        ]);
    }
}
