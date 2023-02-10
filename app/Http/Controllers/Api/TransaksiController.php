<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::get()
                    ->map(function($transaksi){
                        return $this->format($transaksi);
                    });
        return $this->result($transaksi);
    }

    public function format($transaksi)
    {
        return[
            'id'                   => $transaksi->id,
            'Custemor_id'          => $transaksi->custemor_id,
            'Treatment_id'         => $transaksi->treatment_id,
            'Nama'                 => $transaksi->nama,
            'Umur'                 => $transaksi->umur,
            'Alamat'               => $transaksi->alamat,
            'No HP'                => $transaksi->no_hp,
            'Keluhan'              => $transaksi->keluhan,
            'Kode Transaksi'       => $transaksi->kode_transaksi,
            'Status Transaksi'     => $transaksi->status,
            'Tanggal reservasi'    => Carbon::parse($transaksi->tanggal_reservasi)->translatedFormat('d F Y'),
            'Tanggal Pemesanan'    => Carbon::parse($transaksi->created_at)->translatedFormat('d F Y')
        ];
    }

    public function result($transaksi)
    {
        return response()->json([
            'Status'        => true,
            'Message'       => "Berhasil bro",
            'Data'          => $transaksi,
        ], 200);
    }


}
