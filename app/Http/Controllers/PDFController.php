<?php

namespace App\Http\Controllers;

use App\PeminjamanBarangSiswa;
use App\PeminjamanBarangGuru;
use App\PeminjamanKunciSiswa;
use App\PeminjamanKunciGuru;
use PDF;

class PDFController extends Controller
{
    public function peminjamanBarangGurupdf()
    {
        $date = session('sortMonthBarangGuru');
        $date = session('sortYearBarangGuru');
        $peminjamanbaranggurus = PeminjamanBarangGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        $pdf = 'PDF'::loadView('peminjaman_barang_guru/pdfpreview', compact('peminjamanbaranggurus'))->setPaper('a4', 'landscape');
        return $pdf->stream('laporan peminjaman barang guru - ' . date('Y-m-d_H-i-s') . '.pdf');
    }

    public function peminjamanBarangSiswapdf()
    {
        $date = session('sortMonthBarangSiswa');
        $date = session('sortYearBarangSiswa');
        $peminjamanbarangsiswas = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        $pdf = 'PDF'::loadView('peminjaman_barang_siswa/pdfpreview', compact('peminjamanbarangsiswas'))->setPaper('a4', 'landscape');
        return $pdf->stream('laporan peminjaman barang siswa - ' . date('Y-m-d_H-i-s') . '.pdf');
    }

    public function peminjamanKunciGurupdf()
    {
        $date = session('sortMonthKunciGuru');
        $date = session('sortYearKunciGuru');
        $peminjamankuncigurus = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        $pdf = 'PDF'::loadView('peminjaman_kunci_guru/pdfpreview', compact('peminjamankuncigurus'))->setPaper('a4', 'landscape');
        return $pdf->stream('laporan peminjaman kunci guru - ' . date('Y-m-d_H-i-s') . '.pdf');
    }

    public function peminjamanKunciSiswapdf()
    {
        $date = session('sortMonthKunciSiswa');
        $date = session('sortYearKunciSiswa');
        $peminjamankuncisiswas = PeminjamanKunciSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        $pdf = 'PDF'::loadView('peminjaman_kunci_siswa/pdfpreview', compact('peminjamankuncisiswas'))->setPaper('a4', 'landscape');
        return $pdf->stream('laporan peminjaman kunci siswa - ' . date('Y-m-d_H-i-s') . '.pdf');
    }
}
