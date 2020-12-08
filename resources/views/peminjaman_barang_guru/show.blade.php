@extends('layouts/main')

@section('title', 'Show Data Peminjaman Barang Guru')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="card-title text-center" style="margin-bottom: -5px">Detail <b>PMBG-{{$peminjamanBarangGuru->id}}</b></h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    @foreach($peminjamanBarangGuru->Barang as $item)
                        <img class="img-fluid img-responsive" src="{{ asset('image/upload/'.$item->gambar_barang) }}" alt="Card image cap">
                    @endforeach
                </div>
                <div class="div col-md-7">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama Peminjam : {{$peminjamanBarangGuru->nama_peminjam}}</li>
                        <li class="list-group-item">NIK Peminjam : {{$peminjamanBarangGuru->nik}}</li>
                        <li class="list-group-item">Jabatan Peminjam :
                            @foreach($peminjamanBarangGuru->Jabatan as $item)
                                {{ $item->nama_jabatan }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Barang Dipinjam :
                            @foreach($peminjamanBarangGuru->Barang as $item)
                                {{ $item->nama_barang }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Tanggal Peminjaman : {{$peminjamanBarangGuru->tanggal_pinjam}}</li>
                        <li class="list-group-item">Tanggal Pengembalian : {{$peminjamanBarangGuru->tanggal_kembali}}</li>
                        <li class="list-group-item">Status Pinjam :
                            @if($peminjamanBarangGuru->status == 'Pending')
                                <span class="badge badge-pill badge-warning">Pending</span>
                            @elseif ($peminjamanBarangGuru->status == 'Dipinjam')
                                <span class="badge badge-pill badge-primary">Dipinjam</span>
                            @else
                                <span class="badge badge-pill badge-success">Dikembalikan</span>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="/peminjaman_barang_guru" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
