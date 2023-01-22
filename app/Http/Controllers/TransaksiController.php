<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransaksiRequest;
use App\Models\Transaksi;
use App\Models\treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $treatment = treatment::where('kuota', '>', 0)->get(); //tampilkan yang kuotanya lebih dari 0
        return view('custemor.data-treatment', [
            'treatment' => $treatment,
        ]);
    }

    public function treatment()
    {
        $treatment = treatment::where('kuota', '>', 0)->get(); //tampilkan yang kuotanya lebih dari 0
        return view('custemor.checkout', [
            'treatment' => $treatment,
        ]);
    }

    public function berhasil()
    {
        return view('custemor.berhasil');
    }

    public function checkout(TransaksiRequest $request)
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

        //kalo checkout otomatis mengurangi jumlah kuota.

        $kuota          = treatment::findOrFail($request->treatment_id);
        $kuota->kuota   = $kuota->kuota - 1;
        $kuota->update();

        
        return redirect()->route('checkout.berhasil');
    }

    public function myTreatment()
    {
        $user_id = Auth::user()->id;

        $transaksi = Transaksi::where('custemor_id', $user_id)
        ->get();

        return view('custemor.myTreatment', [
            'transaksi' => $transaksi,
        ]);
    }
}
