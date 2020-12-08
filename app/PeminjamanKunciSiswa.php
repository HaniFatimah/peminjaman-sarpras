<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminjamanKunciSiswa extends Model
{
    protected $fillable = [
        'user_id', 'nama_peminjam', 'nipd', 'kunci_id', 'kelas_id', 'tanggal_pinjam', 'tanggal_kembali', 'status'
    ];

    public function Kelas()
    {
        return $this->hasMany('App\KelasRuang', 'id', 'kelas_id');
    }

    public function Kunci()
    {
        return $this->hasMany('App\Kunci', 'id', 'kunci_id');
    }
}
