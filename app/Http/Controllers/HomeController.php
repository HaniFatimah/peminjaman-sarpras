<?php

namespace App\Http\Controllers;

use App\User;
use App\Barang;
use App\KelasRuang;
use App\Kunci;

//siswa
use App\PeminjamanBarangSiswa;
use App\PeminjamanKunciSiswa;

//guru
use App\PeminjamanBarangGuru;
use App\PeminjamanKunciGuru;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            //admin
            'count_admin' => User::where('role_id', '1')->count(),
            'count_siswa' => User::where('role_id', '4')->count(),
            'count_guru' => User::where('role_id', '3')->count(),
            'count_barang' => Barang::all()->count(),
            'count_kunci' => Kunci::all()->count(),
            'count_kelas' => KelasRuang::all()->count(),

            //peminjaman siswa
            'count_peminjaman_barang_siswa' => PeminjamanBarangSiswa::all()->count(),
            'count_peminjaman_kunci_siswa' => PeminjamanKunciSiswa::all()->count(),

            //barang
            'count_peminjaman_barang_siswa_pending' => PeminjamanBarangSiswa::where('status', 'Pending')->count(),
            'count_peminjaman_barang_siswa_pinjam' => PeminjamanBarangSiswa::where('status', 'Dipinjam')->count(),
            'count_peminjaman_barang_siswa_kembali' => PeminjamanBarangSiswa::where('status', 'Dikembalikan')->count(),

            //kunci
            'count_peminjaman_kunci_siswa_pending' => PeminjamanKunciSiswa::where('status', 'Pending')->count(),
            'count_peminjaman_kunci_siswa_pinjam' => PeminjamanKunciSiswa::where('status', 'Dipinjam')->count(),
            'count_peminjaman_kunci_siswa_kembali' => PeminjamanKunciSiswa::where('status', 'Dikembalikan')->count(),

            //peminjaman barang sesuai siswa login
            'count_peminjaman_barang_user_siswa_pending' => PeminjamanBarangSiswa::where('user_id', Auth::user()->id)->where('status', 'Pending')->count(),
            'count_peminjaman_barang_user_siswa_pinjam' => PeminjamanBarangSiswa::where('user_id', Auth::user()->id)->where('status', 'Dipinjam')->count(),
            'count_peminjaman_barang_user_siswa_kembali' => PeminjamanBarangSiswa::where('user_id', Auth::user()->id)->where('status', 'Dikembalikan')->count(),

            //peminjaman Kunci sesuai siswa login
            'count_peminjaman_kunci_user_siswa_pending' => PeminjamanKunciSiswa::where('user_id', Auth::user()->id)->where('status', 'Pending')->count(),
            'count_peminjaman_kunci_user_siswa_pinjam' => PeminjamanKunciSiswa::where('user_id', Auth::user()->id)->where('status', 'Dipinjam')->count(),
            'count_peminjaman_kunci_user_siswa_kembali' => PeminjamanKunciSiswa::where('user_id', Auth::user()->id)->where('status', 'Dikembalikan')->count(),

            //peminjaman guru
            'count_peminjaman_barang_guru' => PeminjamanBarangGuru::all()->count(),
            'count_peminjaman_kunci_guru' => PeminjamanKunciGuru::all()->count(),

            //barang
            'count_peminjaman_barang_guru_pending' => PeminjamanBarangGuru::where('status', 'Pending')->count(),
            'count_peminjaman_barang_guru_pinjam' => PeminjamanBarangGuru::where('status', 'Dipinjam')->count(),
            'count_peminjaman_barang_guru_kembali' => PeminjamanBarangGuru::where('status', 'Dikembalikan')->count(),

            //kunci
            'count_peminjaman_kunci_guru_pending' => PeminjamanKunciGuru::where('status', 'Pending')->count(),
            'count_peminjaman_kunci_guru_pinjam' => PeminjamanKunciGuru::where('status', 'Pending')->count(),
            'count_peminjaman_kunci_guru_kembali' => PeminjamanKunciGuru::where('status', 'Dikembalikan')->count(),

            //peminjaman barang sesuai guru login
            'count_peminjaman_barang_user_guru_pending' => PeminjamanBarangGuru::where('user_id', Auth::user()->id)->where('status', 'Pending')->count(),
            'count_peminjaman_barang_user_guru_pinjam' => PeminjamanBarangGuru::where('user_id', Auth::user()->id)->where('status', 'Dipinjam')->count(),
            'count_peminjaman_barang_user_guru_kembali' => PeminjamanBarangGuru::where('user_id', Auth::user()->id)->where('status', 'Dikembalikan')->count(),

            //peminjaman barang sesuai guru login
            'count_peminjaman_kunci_user_guru_pending' => PeminjamanKunciGuru::where('user_id', Auth::user()->id)->where('status', 'Pending')->count(),
            'count_peminjaman_kunci_user_guru_pinjam' => PeminjamanKunciGuru::where('user_id', Auth::user()->id)->where('status', 'Dipinjam')->count(),
            'count_peminjaman_kunci_user_guru_kembali' => PeminjamanKunciGuru::where('user_id', Auth::user()->id)->where('status', 'Dikembalikan')->count(),
        ]);
    }
}
