<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_transaksi',
        'id_barang',
        'tanggal_pengiriman',
        'tanggal_sampai',
        'penanggung_jawab',
        'alamat',
    ];

    public function Barang(){
        return $this->belongsTo(Barang::class, 'id', 'id_barang');
    }

    public function Pengiriman(){
        return $this->hasMany(Pengiriman::class);
    }
}
