<?php

namespace App\Exports;

use App\PeminjamanKunciSiswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class peminjamanKunciSiswaExport implements FromView
{
    public function view(): View
    {
        $date = session('sortMonthKunciSiswa');
        $date = session('sortYearKunciSiswa');
        $peminjamankuncisiswas = PeminjamanKunciSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        return view('peminjaman_kunci_siswa/pdfpreview', compact('peminjamankuncisiswas'));
    }
}
