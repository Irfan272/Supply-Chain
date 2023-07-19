<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retur extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_retur',
        'id_barang',
        'id_distributor',
        'qty',
        'jumlah',
        'total_harga',
        'status',
    ];

    public function Barang(){
        return $this->belongsTo(Barang::class, 'id', 'id_barang');
    }

    public function Distributor(){
        return $this->hasMany(Distributor::class, 'id', 'id_distributor');
    }
}
