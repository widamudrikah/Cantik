<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'custemor_id',
        'treatment_id',
        'nama',
        'umur',
        'alamat',
        'no_hp',
        'keluhan',
        'tanggal_reservasi',
        'kode_transaksi',
        'status',
    ];
}
