<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['kategori_id', 'kode_barang', 'nama_barang', 'kondisi_barang', 'tahun_pembelian', 'gambar_barang'];

    public function KategoriBarang()
    {
        return $this->hasMany('App\KategoriBarang', 'id', 'kategori_id');
    }

    public function PeminjamanBarangSiswa()
    {
        return $this->belongsTo('App\PeminjamanBarangSiswa');
    }

    public function PeminjamanBarangGuru()
    {
        return $this->belongsTo('App\PeminjamanBarangGuru');
    }
}
