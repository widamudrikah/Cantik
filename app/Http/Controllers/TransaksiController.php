<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $treatment = treatment::all();
        return view('custemor.data-treatment', [
            'treatment' => $treatment,
        ]);
    }

    public function treatment()
    {
        $treatment = treatment::all();
        return view('custemor.checkout', [
            'treatment' => $treatment,
        ]);
    }

    public function berhasil()
    {
        return view('custemor.berhasil');
    }

    public function checkout(Request $request)
    {
        // dd($request);

        $brand = 'BCCS';
        $karakter = '0123456789';
        $acak = str_shuffle($karakter);
        $kode1 = substr($acak,0,12);
        $kode = $brand.'-'.$kode1;

        $transaksi                      = new Transaksi();
        $transaksi->custemor_id         = auth()->id();
        $transaksi->treatment_id        = $request->treatment_id;
        $transaksi->nama                = $request->nama;
        $transaksi->umur                = $request->umur;
        $transaksi->alamat              = $request->alamat;
        $transaksi->no_hp               = $request->no_hp;
        $transaksi->keluhan             = $request->keluhan;
        $transaksi->tanggal_reservasi   = $request->tanggal_reservasi;
        $transaksi->kode_transaksi      = $kode;

        $transaksi->save();

        return redirect()->route('checkout.berhasil');



    }
}
