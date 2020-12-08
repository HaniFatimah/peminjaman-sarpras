<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama_guru'];

    public function PeminjamanBarangSiswa()
    {
        return $this->belongsTo('App\PeminjamanBarangSiswa');
    }
}
