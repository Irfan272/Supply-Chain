<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_barang',
        'nama_barang',
        'stok',
        'qty',
        'merk',
        'harga_pokok',
        'harga_jual',
        'foto',
    ];

    public function Penjualan(){
        return $this->hasMany(Penjualan::class);
    }
    public function Pengiriman(){
        return $this->hasMany(Pengiriman::class);
    }

    public function Pembelian(){
        return $this->hasMany(Pembelian::class);
    }
    public function Retur(){
        return $this->hasMany(Retur::class);
    }
}
