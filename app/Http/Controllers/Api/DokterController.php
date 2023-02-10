<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = User::where('role', 2)->get()
            ->map(function ($dokter) {
                return $this->format($dokter);
            });
        return $this->result($dokter);
    }

    public function format($dokter)
    {
        return [
            'id'                => $dokter->id,
            'Nama'              => $dokter->name,
            'Email'             => $dokter->email,
            'password'          => $dokter->password,
            'Photo'             => $dokter->gambar,
            'terbuat'           => Carbon::parse($dokter->created_at)->translatedFormat('d F Y')
        ];
    }

    public function result($dokter)
    {
        return response()->json([
            'Status'        => true,
            'Message'       => "Berhasil bro",
            'Data'          => $dokter,
        ], 200);
    }
}
