<?php

namespace App\Http\Controllers;

use App\Barang;
use App\KategoriBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang/index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoribarangs = KategoriBarang::all();
        return view('barang/create', compact('kategoribarangs'));
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
            'kategori_id' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kondisi_barang' => 'required',
            'tahun_pembelian' => 'required',
            'gambar_barang' => 'required',
        ]);

        $file = $request->file('gambar_barang');
        $tujuan_upload = 'image/upload';
        $file->move($tujuan_upload, $file->getClientOriginalName());

        Barang::create([
            'kategori_id' => $request->kategori_id,
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kondisi_barang' => $request->kondisi_barang,
            'tahun_pembelian' => $request->tahun_pembelian,
            'gambar_barang' => $file->getClientOriginalName(),
        ]);
        return redirect('/barang')->with('status', 'Data ' . $request->nama_barang . ' Berhasil Ditambahkan!');
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
    public function edit(Barang $barang)
    {
        $kategoribarangs = KategoriBarang::all();
        return view('barang/edit', compact('barang', 'kategoribarangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kategori_id' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kondisi_barang' => 'required',
            'tahun_pembelian' => 'required',
            'gambar_barang' => 'required',
        ]);

        $file = $request->file('gambar_barang');
        $tujuan_upload = 'image/upload';
        $file->move($tujuan_upload, $file->getClientOriginalName());

        Barang::where('id', $barang->id)
            ->update([
                'kategori_id' => $request->kategori_id,
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'kondisi_barang' => $request->kondisi_barang,
                'tahun_pembelian' => $request->tahun_pembelian,
                'gambar_barang' => $file->getClientOriginalName(),
            ]);
        return redirect('/barang')->with('status', 'Data ' . $request->nama_barang . ' Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        return redirect('/barang')->with('statusDelete', 'Data Berhasil Dihapus!');
    }
}
