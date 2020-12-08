
@extends('layouts/main')

@section('title', 'Show Data Peminjaman Kunci Siswa')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="card-title text-center" style="margin-bottom: -5px">Detail <b>PMKS-{{$peminjamanKunciSiswa->id}}</b></h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="div col-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama Peminjam : {{$peminjamanKunciSiswa->nama_peminjam}}</li>
                        <li class="list-group-item">NIPD Peminjam : {{$peminjamanKunciSiswa->nipd}}</li>
                        <li class="list-group-item">Kunci Dipinjam :
                            @foreach($peminjamanKunciSiswa->Kunci as $item)
                                {{ $item->nama_kunci }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Kelas Peminjam :
                            @foreach($peminjamanKunciSiswa->Kelas as $item)
                                {{ $item->ruang_kelas }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Tanggal Peminjaman : {{$peminjamanKunciSiswa->tanggal_pinjam}}</li>
                        <li class="list-group-item">Tanggal Pengembalian : {{$peminjamanKunciSiswa->tanggal_kembali}}</li>
                        <li class="list-group-item">Status Pinjam :
                            @if($peminjamanKunciSiswa->status == 'Pending')
                                <span class="badge badge-pill badge-warning">Pending</span>
                            @elseif ($peminjamanKunciSiswa->status == 'Dipinjam')
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
    <a href="/peminjaman_kunci_siswa" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
