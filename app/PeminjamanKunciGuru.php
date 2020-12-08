<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminjamanKunciGuru extends Model
{
    protected $fillable = [
        'user_id', 'nama_peminjam', 'nik', 'jabatan_id', 'kunci_id', 'tanggal_pinjam', 'tanggal_kembali', 'status'
    ];

    public function Jabatan()
    {
        return $this->hasMany('App\Jabatan', 'id', 'jabatan_id');
    }

    public function Kunci()
    {
        return $this->hasMany('App\Kunci', 'id', 'kunci_id');
    }
}
