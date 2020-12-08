<?php

namespace App\Http\Controllers;

use App\KelasRuang;
use Illuminate\Http\Request;

class KelasRuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelasruangs = KelasRuang::all();
        return view('kelas_ruang/index', compact('kelasruangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas_ruang/create');
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
            'ruang_kelas' => 'required',
        ]);
        KelasRuang::create($request->all());
        return redirect('/kelas_ruang')->with('status', 'Data ' . $request->ruang_kelas . ' Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasRuang $kelasRuang)
    {
        return view('kelas_ruang/edit', compact('kelasRuang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasRuang $kelasRuang)
    {
        $request->validate([
            'ruang_kelas' => 'required',
        ]);
        KelasRuang::where('id', $kelasRuang->id)
            ->update([
                'ruang_kelas' => $request->ruang_kelas,
            ]);
        return redirect('/kelas_ruang')->with('status', 'Data ' . $request->ruang_kelas . ' Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasRuang $kelasRuang)
    {
        KelasRuang::destroy($kelasRuang->id);
        return redirect('/kelas_ruang')->with('statusDelete', 'Data Berhasil Dihapus!');
    }
}
