<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    protected $fillable = ['nama_kategori'];

    public function Barang()
    {
        return $this->belongsTo('App\Barang');
    }
}
