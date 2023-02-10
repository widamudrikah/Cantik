<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TreatmentController extends Controller
{
    public function index()
    {
        $treatment      = treatment::get()
                            ->map(function($treatment){
                                return $this->format($treatment);
                            });
        return $this->result($treatment);
    }

    public function detail($id)
    {
        $treatment = treatment::where('id',$id)
                    ->get()
                    ->map(function ($treatment){
                        return $this->format($treatment);
                    });
        return $this->result($treatment);
    }

    public function tambahTreatment(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'kategori_id'       => 'required',
            'dokter_id'         => 'required',
            'nama_treatment'    => 'required',
            'harga'             => 'required',
            'deskripsi'         => 'required',
            'gambar'            => 'required',
            'kuota'             => 'required',
        ]);

        if($validasi->fails()){
            $valIndex = $validasi->errors()->all();
            return $this->errorWoy(false, $valIndex[0]);
        }
        $treatment = treatment::create([
            'kategori_id'       => $request->kategori_id,
            'dokter_id'         => $request->dokter_id,
            'nama_treatment'    => $request->nama_treatment,
            'harga'             => $request->harga,
            'deskripsi'         => $request->deskripsi,
            'gambar'            => $request->file('gambar')->store('img-treatment'),
            'kuota'             => $request->kuota,
        ]);
        $treatment = treatment::where('id', $treatment->id)
                    ->get()
                    ->map(function($treatment){
                        return $this->format($treatment);
                    });
        return $this->result($treatment);
        
    }

    public function format($treatment)
    {
        return[
            'id'                => $treatment->id,
            'kategori'          => $treatment->kategori_id,
            'nama_treatment'    => $treatment->nama_treatment,
            'Dokter'            => $treatment->dokter_id,
            'Harga'             => $treatment->harga,
            'Deskripsi'         => $treatment->deskripsi,
            'Kuota Tersedia'    => $treatment->kuota,
            'gambar'            => $treatment->gambar,
            'terbuat'           => Carbon::parse($treatment->created_at)->translatedFormat('d F Y')
        ];
    }

    public function hapusTreatment($id)
    {
        $transaksi = Transaksi::where('treatment_id', $id)->get();
        $id_transaksi = Arr::pluck($transaksi, 'id');
        $jumlah_transaksi = count($id_transaksi);

        for($x=0; $x < $jumlah_transaksi; $x++){
            $hapus = Transaksi::findOrFail($id_transaksi[$x]);
            DB::delete("delete from transaksis where id='$id_transaksi[$x]'");
        }

        $treatment = treatment::findOrFail($id);
        Storage::delete($treatment->gambar);
        $treatment->delete();

        return response()->json([
            'message'      => "Berhasil hapus data",
        ], 200);

    }

    public function updateTreatment(Request $request, $id)
    {
        $treatment = treatment::where('id', $id)->first();

        if(!$treatment){
            return response([
                'status'    => false,
                'message'   => "Data tidak ada"
            ]);
        }

        $validasi = Validator::make($request->all(), [
            'kategori_id'          =>['required'],
            'dokter_id'            =>['required'],
            'nama_treatment'       =>['required'],
            'harga'                =>['required'],
            'deskripsi'            =>['required'],
        ]);
        if($validasi->fails()){
            $valIndex = $validasi->errors()->all();
            return $this->errorWoy(false, $valIndex[0]);
        }

        $treatment->update([
            'kategori_id'       =>$request->kategori_id,
            'dokter_id'         =>$request->dokter_id,
            'nama_treatment'    =>$request->nama_treatment,
            'harga'             =>$request->harga,
            'deskripsi'         =>$request->deskripsi,
        ]);

        $treatment = treatment::where('id', $treatment->id)
                ->get()
                ->map(function($treatment){
                    return $this->format($treatment);
                });
        return $this->result($treatment);
    }

    public function result($treatment)
    {
        return response()->json([
            'Status'        => true,
            'Message'       => "Berhasil bro",
            'Data'          => $treatment,
        ], 200);
    }

    public function errorWoy($status, $message)
    {
        return response()->json([
            'status'        => $status,
            'messages'      => $message,
        ], 200);
    }
}
