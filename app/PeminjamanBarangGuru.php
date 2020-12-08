<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminjamanBarangGuru extends Model
{
    protected $fillable = [
        'user_id', 'nama_peminjam', 'nik', 'jabatan_id', 'barang_id', 'tanggal_pinjam', 'tanggal_kembali', 'status'
    ];

    public function Jabatan()
    {
        return $this->hasMany('App\Jabatan', 'id', 'jabatan_id');
    }

    public function Barang()
    {
        return $this->hasMany('App\Barang', 'id', 'barang_id');
    }
}
