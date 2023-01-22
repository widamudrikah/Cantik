<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treatment extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori_id',
        'dokter_id',
        'nama_treatment',
        'harga',
        'deskripsi',
        'gambar',
        'kuota',

    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'dokter_id', 'id');
    }
}
