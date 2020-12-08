<?php

namespace App\Http\Controllers;

use DateTime;
use App\Barang;
use App\Jabatan;
use App\PeminjamanBarangGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanBarangGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == "1") {
            $peminjamanbaranggurus = PeminjamanBarangGuru::all();
            $count_peminjaman_barang_guru_pending = PeminjamanBarangGuru::where('status', 'Pending')->count();
            $count_peminjaman_barang_guru_pinjam = PeminjamanBarangGuru::where('status', 'Dipinjam')->count();
            $count_peminjaman_barang_guru_kembali = PeminjamanBarangGuru::where('status', 'Dikembalikan')->count();
            return view('peminjaman_barang_guru/index', compact('peminjamanbaranggurus' , 'count_peminjaman_barang_guru_pending', 'count_peminjaman_barang_guru_pinjam', 'count_peminjaman_barang_guru_kembali'));
        } else {
            $peminjamanbaranggurus = PeminjamanBarangGuru::where('user_id', Auth::user()->id)->get();
            return view('peminjaman_barang_guru/index', compact('peminjamanbaranggurus'));
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
        $jabatans = Jabatan::all();
        $dt = new DateTime();
        $date = $dt->format('Y-m-d\TH:i');
        return view('peminjaman_barang_guru/create', compact('barangs', 'jabatans', 'date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        $request->validate([
            'user_id' => 'required',
            'nama_peminjam' => 'required',
            'nik' => 'required|max:16',
            'jabatan_id' => 'required',
            'barang_id' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required',
        ]);

        PeminjamanBarangGuru::create($request->all());
        return redirect('/peminjaman_barang_guru')->with('status', 'Data Peminjaman Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PeminjamanBarangGuru $peminjamanBarangGuru)
    {
        $barangs = Barang::all();
        $jabatans = Jabatan::all();
        return view('peminjaman_barang_guru/show', compact('peminjamanBarangGuru', 'barangs', 'jabatans'));
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
    public function update(Request $request, PeminjamanBarangGuru $peminjamanBarangGuru)
    {
        if ($peminjamanBarangGuru->status == "Pending") {
            PeminjamanBarangGuru::where('id', $peminjamanBarangGuru->id)
                ->update([
                    'status' => 'Dipinjam',
                ]);
            return redirect('/peminjaman_barang_guru')->with('status', 'Barang Telah Dipinjam!');
        } else {
            PeminjamanBarangGuru::where('id', $peminjamanBarangGuru->id)
                ->update([
                    'status' => 'Dikembalikan',
                ]);
            return redirect('/peminjaman_barang_guru')->with('status', 'Barang Telah Dikembalikan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeminjamanBarangGuru $peminjamanBarangGuru)
    {
        PeminjamanBarangGuru::destroy($peminjamanBarangGuru->id);
        return redirect('/peminjaman_barang_guru')->with('statusDelete', 'Data Peminjaman Berhasil Dihapus!');
    }

    public function sortByMonth(Request $request)
    {
        $date = $request->sortMonth;
        session(['sortMonthBarangGuru' => $date]);
        $peminjamanbaranggurus = PeminjamanBarangGuru::where('tanggal_pinjam', 'LIKE' ,'%'.$date.'%')->get();
        $count_peminjaman_barang_guru_pending = PeminjamanBarangGuru::where('tanggal_pinjam', 'LIKE' ,'%'.$date.'%')->where('status', 'Pending')->count();
        $count_peminjaman_barang_guru_pinjam = PeminjamanBarangGuru::where('tanggal_pinjam', 'LIKE' ,'%'.$date.'%')->where('status', 'Dipinjam')->count();
        $count_peminjaman_barang_guru_kembali = PeminjamanBarangGuru::where('tanggal_pinjam', 'LIKE' ,'%'.$date.'%')->where('status', 'Dikembalikan')->count();
        return view('peminjaman_barang_guru/index', compact('peminjamanbaranggurus', 'count_peminjaman_barang_guru_pending', 'count_peminjaman_barang_guru_pinjam', 'count_peminjaman_barang_guru_kembali'));
    }

    public function sortByYear(Request $request)
    {
        $date = $request->sortYear;
        session(['sortYearBarangGuru' => $date]);
        $peminjamanbaranggurus = PeminjamanBarangGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        $count_peminjaman_barang_guru_pending = PeminjamanBarangGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Pending')->count();
        $count_peminjaman_barang_guru_pinjam = PeminjamanBarangGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Dipinjam')->count();
        $count_peminjaman_barang_guru_kembali = PeminjamanBarangGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Dikembalikan')->count();
        return view('peminjaman_barang_guru/index', compact('peminjamanbaranggurus', 'count_peminjaman_barang_guru_pending', 'count_peminjaman_barang_guru_pinjam', 'count_peminjaman_barang_guru_kembali'));
    }
}
