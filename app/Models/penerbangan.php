<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbangan extends Model
{
    protected $table = 'penerbangan';
    public function detail_pesanan()
    {
        return $this->hasMany(pemesanan::class, 'id_penerbangan', 'id_penerbangan');
    }
    protected $fillable = [
    'gambar',
    'nama_maskapai',
    'nomor_maskapai',
    'asal',
    'tujuan',
    'waktu_keberangkatan',
    'waktu_kedatangan',
    'harga'
    ];
}
