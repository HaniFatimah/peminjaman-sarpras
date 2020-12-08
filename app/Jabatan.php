<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable = ['nama_jabatan'];

    public function PeminjamanBarangGuru()
    {
        return $this->belongsTo('App\PeminjamanBarangGuru');
    }

    public function PeminjamanKunciGuru()
    {
        return $this->belongsTo('App\PeminjamanKunciGuru');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
