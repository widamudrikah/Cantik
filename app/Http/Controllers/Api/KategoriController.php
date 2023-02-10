<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){

        $kategori = Kategori::get()
                    ->map(function($kategori){
                        return $this->format($kategori);
                    });
            return $this->result($kategori);
    }

    public function format($kategori)
    {
        return[
            'id'        => $kategori->id,
            'kategori'  => $kategori->nama_kategori,
            'gambar'    => $kategori->gambar,
            'terbuat'    =>Carbon::parse($kategori->created_at)->translatedFormat('d F Y')
        ];
    }

    public function result($kategori)
    {
        return response()->json([
            'Status'        => true,
            'Message'       => "Berhasil menampilkan data kategori",
            'Data'          => $kategori
        ]);
    }
}
