<?php

namespace App\Exports;

use App\PeminjamanBarangSiswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class peminjamanBarangSiswaExport implements FromView
{
    public function view(): View
    {
        $date = session('sortMonthBarangSiswa');
        $date = session('sortYearBarangSiswa');
        $peminjamanbarangsiswas = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        return view('peminjaman_barang_siswa/pdfpreview', compact('peminjamanbarangsiswas'));
    }
}
