<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasRuang extends Model
{
    protected $fillable = ['ruang_kelas'];

    public function PeminjamanBarangSiswa()
    {
        return $this->belongsTo('App\PeminjamanBarangSiswa');
    }

    public function PeminjamanKunciSiswa()
    {
        return $this->belongsTo('App\PeminjamanKunciSiswa');
    }
}
