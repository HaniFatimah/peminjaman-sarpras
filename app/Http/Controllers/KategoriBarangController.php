<?php

namespace App\Http\Controllers;

use App\KategoriBarang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoribarangs = KategoriBarang::all();
        return view('kategori_barang/index', compact('kategoribarangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_barang/create');
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
            'nama_kategori' => 'required',
        ]);
        KategoriBarang::create($request->all());
        return redirect('/kategori_barang')->with('status', 'Data ' . $request->nama_kategori . ' Berhasil Ditambahkan!');
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
    public function edit(KategoriBarang $kategoriBarang)
    {
        return view('kategori_barang/edit', compact('kategoriBarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriBarang $kategoriBarang)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);
        KategoriBarang::where('id', $kategoriBarang->id)
            ->update([
                'nama_kategori' => $request->nama_kategori,
            ]);
        return redirect('/kategori_barang')->with('status', 'Data ' . $request->nama_kategori . ' Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriBarang $kategoriBarang)
    {
        KategoriBarang::destroy($kategoriBarang->id);
        return redirect('/kategori_barang')->with('statusDelete', 'Data Berhasil Dihapus!');
    }
}
