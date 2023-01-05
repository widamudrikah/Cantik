<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\treatment;
use App\Models\User;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        $treatment = treatment::all();
        return view('admin.treatment.treatment', [
            'treatment' => $treatment,
        ]);
    }

    public function tambah()
    {
        $kategori = Kategori::all();
        $dokter   = User::where('role', 2)->get();

        return view('admin.treatment.tambah', [
            'kategori'  => $kategori,
            'dokter'    => $dokter,
        ]);
    }

    public function store(Request $request)
    {
        treatment::create([
            'kategori_id'       => $request->kategori_id,
            'dokter_id'         => $request->dokter_id,
            'nama_treatment'    => $request->nama_treatment,
            'harga'             => $request->harga,
            'gambar'            => $request->file('gambar')->store('img-treatment'),
            'deskripsi'         => $request->deskripsi,
        ]);

        return redirect()->route('data.treatment')->with('Ok', "$request->nama_treatment berhasil disimpan");
    }
}
