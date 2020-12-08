<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminjamanBarangSiswa extends Model
{
    protected $fillable = [
        'user_id', 'nama_peminjam', 'nipd', 'barang_id', 'mapel_id', 'guru_id', 'kelas_id', 'tanggal_pinjam', 'tanggal_kembali', 'status'
    ];

    public function Barang()
    {
        return $this->hasMany('App\Barang', 'id', 'barang_id');
    }

    public function Mapel()
    {
        return $this->hasMany('App\Mapel', 'id', 'mapel_id');
    }

    public function Guru()
    {
        return $this->hasMany('App\Guru', 'id', 'guru_id');
    }

    public function Kelas()
    {
        return $this->hasMany('App\KelasRuang', 'id', 'kelas_id');
    }
}
