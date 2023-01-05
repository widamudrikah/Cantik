<?php

namespace App\Http\Controllers;

use App\Http\Requests\DokterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CrudDokterController extends Controller
{
    public function index()
    {
        $dokter = User::where('role', 2)->get();
        return view('admin.user.dokter', [
            'dokter'    => $dokter,
        ]);
    }

    public function tambah()
    {
        return view('admin.user.tambah-dokter');
    }

    public function store(DokterRequest $request)
    {
        $dokter             = new User();
        $dokter->name       = $request->name;
        $dokter->email      = $request->email;
        $dokter->password   = Hash::make($request->password);
        $dokter->role       = 2;
        $dokter->gambar     = $request->file('gambar')->getClientOriginalName();
        $dokter->gambar     = $request->file('gambar')->store('img-gambar');
        $dokter->save();
        
        return redirect()->route('data-dokter');

    }

    public function edit($id)
    {
        $dokter = User::findOrFail($id);
        return view('admin.user.edit-dokter', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $dokter             = User::findOrFail($id);
        $dokter->name       = $request->name;
        $dokter->gambar     = $request->file('gambar')->store('img-gambar');
        $dokter->save();

        return redirect()->route('data-dokter');
    }

    public function destroy($id)
    {
        $dokter = User::findOrFail($id);
        Storage::delete($dokter->gambar);
        $dokter->delete();
        return redirect()->route('data-dokter');
    }
}
