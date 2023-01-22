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

    public function treatment()
    {
        return $this->belongsTo(treatment::class, 'treatment_id', 'id');
    }

    public function custemor()
    {
        return $this->belongsTo(User::class, 'custemor_id', 'id');
    }
}
