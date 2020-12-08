<?php

namespace App\Http\Controllers;

use DateTime;
use App\Kunci;
use App\Jabatan;
use App\PeminjamanKunciGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanKunciGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == "1") {
            $peminjamankuncigurus = PeminjamanKunciGuru::all();
            $count_peminjaman_kunci_guru_pending = PeminjamanKunciGuru::where('status', 'Pending')->count();
            $count_peminjaman_kunci_guru_pinjam = PeminjamanKunciGuru::where('status', 'Pending')->count();
            $count_peminjaman_kunci_guru_kembali = PeminjamanKunciGuru::where('status', 'Dikembalikan')->count();
            return view('peminjaman_kunci_guru/index', compact('peminjamankuncigurus', 'count_peminjaman_kunci_guru_pending', 'count_peminjaman_kunci_guru_pinjam', 'count_peminjaman_kunci_guru_kembali'));
        } else {
            $peminjamankuncigurus = PeminjamanKunciGuru::where('user_id', Auth::user()->id)->get();
            return view('peminjaman_kunci_guru/index', compact('peminjamankuncigurus'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kuncis = Kunci::all();
        $jabatans = Jabatan::all();
        $dt = new DateTime();
        $date = $dt->format('Y-m-d\TH:i');
        return view('peminjaman_kunci_guru/create', compact('kuncis', 'jabatans', 'date'));
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
            'nik' => 'required|max:16',
            'jabatan_id' => 'required',
            'kunci_id' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required',
        ]);

        PeminjamanKunciGuru::create($request->all());
        return redirect('/peminjaman_kunci_guru')->with('status', 'Data Peminjaman Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PeminjamanKunciGuru $peminjamanKunciGuru)
    {
        $kuncis = Kunci::all();
        $jabatans = Jabatan::all();
        return view('peminjaman_kunci_guru/show', compact('peminjamanKunciGuru', 'kuncis', 'jabatans'));
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
    public function update(Request $request, PeminjamanKunciGuru $peminjamanKunciGuru)
    {
        if ($peminjamanKunciGuru->status == "Pending") {
            PeminjamanKunciGuru::where('id', $peminjamanKunciGuru->id)
            ->update([
                'status' => 'Dipinjam',
            ]);
            return redirect('/peminjaman_kunci_guru')->with('status', 'Barang Telah Dipinjam!');
        } else {
            PeminjamanKunciGuru::where('id', $peminjamanKunciGuru->id)
            ->update([
                'status' => 'Dikembalikan',
            ]);
            return redirect('/peminjaman_kunci_guru')->with('status', 'Barang Telah Dikembalikan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeminjamanKunciGuru $peminjamanKunciGuru)
    {
        PeminjamanKunciGuru::destroy($peminjamanKunciGuru->id);
        return redirect('/peminjaman_kunci_guru')->with('statusDelete', 'Data Peminjaman Berhasil Dihapus!');
    }

    public function sortByMonth(Request $request)
    {
        $date = $request->sortMonth;
        session(['sortMonthKunciGuru' => $date]);
        $peminjamankuncigurus = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        $count_peminjaman_kunci_guru_pending = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Pending')->count();
        $count_peminjaman_kunci_guru_pinjam = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Pending')->count();
        $count_peminjaman_kunci_guru_kembali = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Dikembalikan')->count();
        return view('peminjaman_kunci_guru/index', compact('peminjamankuncigurus', 'count_peminjaman_kunci_guru_pending', 'count_peminjaman_kunci_guru_pinjam', 'count_peminjaman_kunci_guru_kembali'));
    }

    public function sortByYear(Request $request)
    {
        $date = $request->sortYear;
        session(['sortYearKunciGuru' => $date]);
        $peminjamankuncigurus = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->get();
        $count_peminjaman_kunci_guru_pending = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Pending')->count();
        $count_peminjaman_kunci_guru_pinjam = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Pending')->count();
        $count_peminjaman_kunci_guru_kembali = PeminjamanKunciGuru::where('tanggal_pinjam', 'LIKE', '%' . $date . '%')->where('status', 'Dikembalikan')->count();
        return view('peminjaman_kunci_guru/index', compact('peminjamankuncigurus', 'count_peminjaman_kunci_guru_pending', 'count_peminjaman_kunci_guru_pinjam', 'count_peminjaman_kunci_guru_kembali'));
    }
}
