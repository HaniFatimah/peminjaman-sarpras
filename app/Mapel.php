<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = ['nama_mapel'];

    public function PeminjamanBarangSiswa()
    {
        return $this->belongsTo('App\PeminjamanBarangSiswa');
    }
}
