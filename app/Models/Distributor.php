<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_distributor',
        'alamat',
        'no_telpon',
    ];

    public function Pembelian(){
        return $this->hasMany(Pembelian::class);
    }
    public function Retur(){
        return $this->hasMany(Retur::class);
    }

}
