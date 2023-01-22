<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $custemor = Transaksi::whereHas('treatment', 
            function($query) use ($user) {
                $query->where ('dokter_id', $user->id)->where('status', 1);
            })->count();

            $transaksi_pending = Transaksi::whereHas('treatment', 
            function($query) use ($user) {
                $query->where ('dokter_id', $user->id)->where('status', 1);
            })->count();

            $transaksi_success = Transaksi::whereHas('treatment', 
            function($query) use ($user) {
                $query->where ('dokter_id', $user->id)->where('status', 2);
            })->count();

            $treatment = treatment::where('dokter_id', $user->id)->count();

            $nama = Auth::user()->name;
        
        return view('dokter.dashboard-dokter', [
            'custemor'              => $custemor,
            'transaksi_pending'     => $transaksi_pending,
            'transaksi_success'     => $transaksi_success,
            'treatment'             => $treatment,
            'nama'                  => $nama,
        ]);
    }

    public function pending()
    {
        $user = Auth::user();
        $transaksi = Transaksi::whereHas('treatment', 
            function($query) use ($user) {
                $query->where ('dokter_id', $user->id)->where('status', 1);
            })->get();

        return view('dokter.pending-job', [
            'transaksi' => $transaksi,
        ]);
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('dokter.edit-status', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $transaksi              = Transaksi::findOrFail($id);
        $transaksi->status      = $request->status;
        $transaksi->save();

        // Treatment tambah kuota
        $kuota  = Transaksi::with('treatment')->find($id);
        $treatment = $kuota->treatment;
        $treatment->kuota = $treatment->kuota + 1;
        $treatment->save();

        return redirect()->route('pending.dokter');
    }

    public function success()
    {
        $user = Auth::user();
        $transaksi = Transaksi::whereHas('treatment', 
            function($query) use ($user) {
                $query->where ('dokter_id', $user->id)->where('status', 2);
            })->get();
        

        return view('dokter.sucess-job', [
            'transaksi' => $transaksi,
        ]);
    }

    public function treatment()
    {
        $user_id = Auth::user()->id;

        $treatment = treatment::where('dokter_id', $user_id)->get();

        return view('dokter.my-treatment', [
            'treatment' => $treatment,
        ]);
    }

    public function custemor()
    {
        $user = Auth::user();
        $custemor = Transaksi::whereHas('treatment', 
            function($query) use ($user) {
                $query->where ('dokter_id', $user->id)->where('status', 1);
            })->get();

        return view('dokter.my-custemor', [
            'custemor' => $custemor,
        ]);
        
    }
}
