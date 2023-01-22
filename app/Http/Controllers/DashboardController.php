<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $custemor = User::where('role', 3)->count();
        $dokter   = User::where('role', 2)->count();
        $sukses   = Transaksi::where('status', 2)->count();
        $pending  = Transaksi::where('status', 1)->count();

        // Data chart
        $transaksi = Transaksi::selectRaw("MONTHNAME(created_at) as bulan, COUNT(*) as total")
            ->groupBy("bulan")
            ->orderByRaw("FIELD(bulan,'January','February','March','April','May','June','July','August','September','October','November','December')")
            ->get();
        if (count($transaksi) == 0) {
            return view('admin.dashboard', [
                'custemor'      => $custemor,
                'dokter'        => $dokter,
                'sukses'        => $sukses,
                'pending'       => $pending,
                'data_lable' => [],
                'data_value' => [],
                'message' => 'Data transaksi kosong'
            ]);
        }

        $data_lable = $data_value = array();
        foreach ($transaksi as $t) {
            $data_lable[]   = $t->bulan;
            $data_value[]   = $t->total;
        }

        return view('admin.dashboard', [
            'custemor'      => $custemor,
            'dokter'        => $dokter,
            'sukses'        => $sukses,
            'pending'       => $pending,
        ], compact('data_lable', 'data_value'));
    }
}
