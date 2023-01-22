<?php

namespace App\Http\Controllers;

use App\Http\Requests\TreatmentRequest;
use App\Models\Kategori;
use App\Models\Transaksi;
use App\Models\treatment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function store(TreatmentRequest $request)
    {
        treatment::create([
            'kategori_id'       => $request->kategori_id,
            'dokter_id'         => $request->dokter_id,
            'nama_treatment'    => $request->nama_treatment,
            'harga'             => $request->harga,
            'gambar'            => $request->file('gambar')->store('img-treatment'),
            'deskripsi'         => $request->deskripsi,
            'kuota'             => $request->kuota,
        ]);

        return redirect()->route('data.treatment')->with('Ok', "$request->nama_treatment berhasil disimpan");
    }

    public function edit($id)
    {
        $treatment = treatment::findOrFail($id);
        $kategori  = Kategori::all();
        $dokter   = User::where('role', 2)->get();
        return view('admin.treatment.edit', compact('treatment', 'kategori', 'dokter'));
    }

    public function update(Request $request, $id)
    {
        $treatment = treatment::findOrFail($id);
        $treatment->kategori_id         = $request->kategori_id;
        $treatment->dokter_id           = $request->dokter_id;
        $treatment->nama_treatment      = $request->nama_treatment;
        $treatment->harga               = $request->harga;
        $treatment->gambar              = $request->file('gambar')->store('img-treatment');
        $treatment->deskripsi           = $request->deskripsi;
        $treatment->save();

        return redirect()->route('data.treatment');
    }

    public function detail($id)
    {
        $treatment  = treatment::findOrFail($id);
        return view('admin.treatment.detail', compact('treatment'));
    }

    // public function destroy($id)
    // {
    //     $treatment = Treatment::find($id);
    //     $transaksi = $treatment->transaksi;
    //     if(!is_null($transaksi)) {
    //         foreach($transaksi as $t) {
    //             $t->delete();
    //         }
    //     }

    //     // return $treatment;
    //     $treatment->delete();
    
    //     return redirect()->route('treatment.index')->with('success', 'Data treatment dan transaksi berhasil dihapus');
    // }

    // public function destroy($id)
    // {
    //     $treatment = Treatment::findOrFail($id);
    //     $transaksi = $treatment->transaksi;
    //     foreach ($transaksi as $t) {
    //         $t->delete();
    //     }
    //     return $treatment;
    //     // $treatment->delete();

    //     return redirect()->route('data.treatment')->with('success', 'Data treatment dan transaksi berhasil dihapus');
    // }

    public function destroy($id)
    {
        $transaksi = Transaksi::where('treatment_id', $id)->get();
        //return $transaksi;
        $id_transaksi = Arr::pluck($transaksi, 'id');
        //return $id_transaksi;
        $jumlah_transaksi = count($id_transaksi);
        //return $jumlah_transaksi;

        for($x=0; $x < $jumlah_transaksi; $x++){
            $bayar  = Transaksi::findOrFail($id_transaksi[$x]);
            DB::delete("delete from transaksis where id='$id_transaksi[$x]'");
        }
        

        $treatment = treatment::findOrFail($id);
        Storage::delete($treatment->gambar);
        $treatment->delete();

        echo "berhasil haus data";

    }
}
