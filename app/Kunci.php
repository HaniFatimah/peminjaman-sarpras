<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunci extends Model
{
    protected $fillable = ['nama_kunci'];

    public function PeminjamanKunciSiswa()
    {
        return $this->belongsTo('App\PeminjamanKunciSiswa');
    }

    public function PeminjamanKunciGuru()
    {
        return $this->belongsTo('App\PeminjamanKunciGuru');
    }
}
