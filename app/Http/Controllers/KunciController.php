<?php

namespace App\Http\Controllers;

use App\Kunci;
use Illuminate\Http\Request;

class KunciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuncis = Kunci::all();
        return view('kunci/index', compact('kuncis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kunci/create');
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
            'nama_kunci' => 'required',
        ]);
        Kunci::create($request->all());
        return redirect('/kunci')->with('status', 'Data ' . $request->nama_kunci . ' Berhasil Ditambahkan!');
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
    public function edit(Kunci $kunci)
    {
        return view('kunci/edit', compact('kunci'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kunci $kunci)
    {
        $request->validate([
            'nama_kunci' => 'required',
        ]);
        Kunci::where('id', $kunci->id)
            ->update([
                'nama_kunci' => $request->nama_kunci,
            ]);
        return redirect('/kunci')->with('status', 'Data ' . $request->nama_kunci . ' Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kunci $kunci)
    {
        Kunci::destroy($kunci->id);
        return redirect('/kunci')->with('statusDelete', 'Data Berhasil Dihapus!');
    }
}
