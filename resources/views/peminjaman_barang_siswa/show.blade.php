@extends('layouts/main')

@section('title', 'Show Data Peminjaman Barang Siswa')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="card-title text-center" style="margin-bottom: -5px">Detail <b>PMBS-{{$peminjamanBarangSiswa->id}}</b></h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    @foreach($peminjamanBarangSiswa->Barang as $item)
                        <img class="img-fluid img-responsive" src="{{ asset('image/upload/'.$item->gambar_barang) }}" alt="Card image cap">
                    @endforeach
                </div>
                <div class="div col-md-7">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama Peminjam : {{$peminjamanBarangSiswa->nama_peminjam}}</li>
                        <li class="list-group-item">NIPD Peminjam : {{$peminjamanBarangSiswa->nipd}}</li>
                        <li class="list-group-item">Guru Pengajar :
                            @foreach($peminjamanBarangSiswa->Guru as $item)
                                {{ $item->nama_guru }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Mata Pelajaran :
                            @foreach($peminjamanBarangSiswa->Mapel as $item)
                                {{ $item->nama_mapel }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Kelas :
                            @foreach($peminjamanBarangSiswa->Kelas as $item)
                                {{ $item->ruang_kelas }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Barang Dipinjam :
                            @foreach($peminjamanBarangSiswa->Barang as $item)
                                {{ $item->nama_barang }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Tanggal Peminjaman : {{$peminjamanBarangSiswa->tanggal_pinjam}}</li>
                        <li class="list-group-item">Tanggal Pengembalian : {{$peminjamanBarangSiswa->tanggal_kembali}}</li>
                        <li class="list-group-item">Status Pinjam :
                            @if($peminjamanBarangSiswa->status == 'Pending')
                                <span class="badge badge-pill badge-warning">Pending</span>
                            @elseif ($peminjamanBarangSiswa->status == 'Dipinjam')
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
    <a href="/peminjaman_barang_siswa" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
