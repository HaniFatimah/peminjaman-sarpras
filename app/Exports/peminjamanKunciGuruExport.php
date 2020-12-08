<?php

namespace App\Exports;

use App\PeminjamanKunciGuru;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class peminjamanKunciGuruExport implements FromView
{
    public function view(): View
    {
        $date = session('sortMonthKunciGuru');
        $date = session('sortYearKunciGuru');
        $peminjamankuncigurus = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        return view('peminjaman_kunci_guru/pdfpreview', compact('peminjamankuncigurus'));
    }
}
