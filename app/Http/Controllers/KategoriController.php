<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriRequest;
use App\Http\Requests\KategoriRequest;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori',[
            'kategori'=>$kategori,
        ]);
    }

    public function tambah()
    {
        return view('admin.tambah-kategori');
    }

    public function store(KategoriRequest $request)
    {

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug'          => Str::slug($request->nama_kategori),
            'gambar'        => $request->file('gambar')->store('img-gambar'),
        ]);

        return redirect()->route('kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('admin.kategori-edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori                      = Kategori::findOrFail($id);
        $kategori->nama_kategori       = $request->nama_kategori;
        $kategori->slug                = Str::slug($request->nama_kategori);
        $kategori->gambar              = $request->file('gambar')->store('img-gambar');

        $kategori->update();

        return redirect()->route('kategori');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        Storage::delete($kategori->gambar);
        $kategori->delete();
        return redirect()->route('kategori');
    }
}
