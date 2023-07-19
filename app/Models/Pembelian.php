<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pembelian',
        'id_barang',
        'id_distributor',
        'jumlah',
        'qty',
        'harga',
        'total_harga',
        'foto',
    ];

    public function Barang(){
        return $this->belongsTo(Barang::class, 'id', 'id_barang');
    }
    public function Distibutor(){
        return $this->belongsTo(Distributor::class, 'id', 'id_distributor');
    }

}
