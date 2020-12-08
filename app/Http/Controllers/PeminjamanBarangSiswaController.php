<?php

namespace App\Http\Controllers;

use DateTime;
use App\Barang;
use App\Mapel;
use App\Guru;
use App\KelasRuang;
use App\PeminjamanBarangSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanBarangSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == "1") {
            $peminjamanbarangsiswas = PeminjamanBarangSiswa::all();
            $count_peminjaman_barang_siswa_pending = PeminjamanBarangSiswa::where('status', 'Pending')->count();
            $count_peminjaman_barang_siswa_pinjam  = PeminjamanBarangSiswa::where('status', 'Dipinjam')->count();
            $count_peminjaman_barang_siswa_kembali = PeminjamanBarangSiswa::where('status', 'Dikembalikan')->count();
            return view('peminjaman_barang_siswa/index', compact('peminjamanbarangsiswas', 'count_peminjaman_barang_siswa_pending', 'count_peminjaman_barang_siswa_pinjam', 'count_peminjaman_barang_siswa_kembali'));
        } else {
            $peminjamanbarangsiswas = PeminjamanBarangSiswa::where('user_id', Auth::user()->id)->get();
            return view('peminjaman_barang_siswa/index', compact('peminjamanbarangsiswas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        $mapels = Mapel::all();
        $gurus = Guru::all();
        $kelass = KelasRuang::all();
        $dt = new DateTime();
        $date = $dt->format('Y-m-d\TH:i');
        return view('peminjaman_barang_siswa/create', compact('barangs', 'mapels', 'gurus', 'kelass', 'date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'nama_peminjam' => 'required',
            'nipd' => 'required|max:10',
            'barang_id' => 'required',
            'mapel_id' => 'required',
            'guru_id' => 'required',
            'kelas_id' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required',
        ]);

        PeminjamanBarangSiswa::create($request->all());
        return redirect('/peminjaman_barang_siswa')->with('status', 'Data Peminjaman Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PeminjamanBarangSiswa $peminjamanBarangSiswa)
    {
        $barangs = Barang::all();
        $mapels = Mapel::all();
        $gurus = Guru::all();
        $kelass = KelasRuang::all();
        return view('peminjaman_barang_siswa/show', compact('peminjamanBarangSiswa', 'barangs', 'mapels', 'gurus', 'kelass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeminjamanBarangSiswa $peminjamanBarangSiswa)
    {
        if ($peminjamanBarangSiswa->status == "Pending") {
            PeminjamanBarangSiswa::where('id', $peminjamanBarangSiswa->id)
                ->update([
                    'status' => 'Dipinjam',
                ]);
            return redirect('/peminjaman_barang_siswa')->with('status', 'Barang Telah Dipinjam!');
        } else {
            PeminjamanBarangSiswa::where('id', $peminjamanBarangSiswa->id)
                ->update([
                    'status' => 'Dikembalikan',
                ]);
            return redirect('/peminjaman_barang_siswa')->with('status', 'Barang Telah Dikembalikan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeminjamanBarangSiswa $peminjamanBarangSiswa)
    {
        PeminjamanBarangSiswa::destroy($peminjamanBarangSiswa->id);
        return redirect('/peminjaman_barang_siswa')->with('statusDelete', 'Data Peminjaman Berhasil Dihapus!');
    }

    public function sortByMonth(Request $request)
    {
        $date = $request->sortMonth;
        session(['sortMonthBarangSiswa' => $date]);
        $peminjamanbarangsiswas = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        $count_peminjaman_barang_siswa_pending = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Pending')->count();
        $count_peminjaman_barang_siswa_pinjam  = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Dipinjam')->count();
        $count_peminjaman_barang_siswa_kembali = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Dikembalikan')->count();
        return view('peminjaman_barang_siswa/index', compact('peminjamanbarangsiswas', 'count_peminjaman_barang_siswa_pending', 'count_peminjaman_barang_siswa_pinjam', 'count_peminjaman_barang_siswa_kembali'));
    }

    public function sortByYear(Request $request)
    {
        $date = $request->sortYear;
        session(['sortYearBarangSiswa' => $date]);
        $peminjamanbarangsiswas = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        $count_peminjaman_barang_siswa_pending = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Pending')->count();
        $count_peminjaman_barang_siswa_pinjam  = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Dipinjam')->count();
        $count_peminjaman_barang_siswa_kembali = PeminjamanBarangSiswa::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Dikembalikan')->count();
        return view('peminjaman_barang_siswa/index', compact('peminjamanbarangsiswas', 'count_peminjaman_barang_siswa_pending', 'count_peminjaman_barang_siswa_pinjam', 'count_peminjaman_barang_siswa_kembali'));
    }
}
