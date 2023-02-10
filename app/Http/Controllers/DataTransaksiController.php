<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class DataTransaksiController extends Controller
{
    public function pending()
    {
        $transaksi = Transaksi::where('status', 1)->get();
        //return $transaksi;
        return view('admin.transaksi.transaksi-pending', [
            'transaksi' => $transaksi,
        ]);
    }
    public function success()
    {
        $transaksi = Transaksi::where('status', 2)->get();
        //return $transaksi;
        return view('admin.transaksi.transaksi-success', [
            'transaksi' => $transaksi,
        ]);
    }
}
