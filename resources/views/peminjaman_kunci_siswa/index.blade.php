@extends('layouts/main')

@section('title', 'Tabel Peminjaman Kunci Siswa')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        @if (auth()->user()->role_id == "1")
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Peminjaman Menunggu Persetujuan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_peminjaman_kunci_siswa_pending}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-key fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kunci Dipinjam</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_peminjaman_kunci_siswa_pinjam}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-key fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kunci Dikembalikan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_peminjaman_kunci_siswa_kembali}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-key fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Peminjaman Kunci Siswa</h1>
        @if (auth()->user()->role_id == "1")
            <form class="form-inline">
                <a href="{{ url('/peminjamanKunciSiswaexcel') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mr-2">
                    <i class="fas fa-file-excel fa-md text-white-50"></i><span class="ml-2">Generate Excel</span>
                </a>
                <a href="{{ url('/peminjamanKunciSiswapdf') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-file-pdf fa-md text-white-50"></i><span class="ml-2">Generate PDF</span>
                </a>
            </form>
        @endif
    </div>

    <!-- Flash Data -->
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif(session('statusDelete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('statusDelete') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-4 mt-2">
                    <a href="/peminjaman_kunci_siswa/create" class="text-primary">
                        <i class="fas fa-plus"><span class="ml-2">Tambah Peminjaman Kunci Siswa</span></i>
                    </a>
                </div>
                <div class="col-md-8">
                    @if (auth()->user()->role_id == "1")
                    <div class="row">
                        <div class="col-lg-4" style="margin-left: -50px">
                            <form class="form-inline ml-3" method="GET" action="peminjaman_kunci_siswa_sort_year">
                                <div class="form-group">
                                    <label for="sort_year" class="mr-2">Sort by Year:</label>
                                        <select class="custom-select mr-3" name="sortYear" id="inputGroupSelect02">
                                            <option selected value="">Choose...</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4" style="margin-left: 100px">
                            <form class="form-inline" method="GET" action="peminjaman_kunci_siswa_sort_month">
                                <div class="form-group">
                                    <label for="sort_month" class="mr-2">Sort by Month:</label>
                                    <input type="month" name="sortMonth" class="form-control mr-3">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                @if (auth()->user()->role_id == "1")
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">Kode Peminjaman</th>
                                <th scope="col" class="text-center">Nama Peminjam</th>
                                <th scope="col" class="text-center">NIPD</th>
                                <th scope="col" class="text-center">Kunci Ruangan</th>
                                <th scope="col" class="text-center">Kelas</th>
                                <th scope="col" class="text-center">Tanggal Pinjam</th>
                                <th scope="col" class="text-center">Tanggal Kembali</th>
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peminjamankuncisiswas as $peminjamanKunciSiswa)
                                <tr>
                                    <th scope="row" class="text-center"><strong>{{ $loop->iteration }}</strong></th>
                                    <td class="text-center">
                                        <a href="{{ route('peminjaman_kunci_siswa.show', $peminjamanKunciSiswa->id) }}">
                                            PMKS-{{ $peminjamanKunciSiswa->id }}
                                        </a>
                                    </td>
                                    <td class="text-center">{{ $peminjamanKunciSiswa->nama_peminjam }}</td>
                                    <td class="text-center">{{ $peminjamanKunciSiswa->nipd }}</td>
                                    <td class="text-center">
                                        @foreach($peminjamanKunciSiswa->Kunci as $item)
                                            {{ $item->nama_kunci }}
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        @foreach($peminjamanKunciSiswa->Kelas as $item)
                                            {{ $item->ruang_kelas }}
                                        @endforeach
                                    </td>
                                    <td class="text-center">{{ $peminjamanKunciSiswa->tanggal_pinjam }}</td>
                                    <td class="text-center">{{ $peminjamanKunciSiswa->tanggal_kembali }}</td>
                                    <td class="text-center">
                                        @if($peminjamanKunciSiswa->status == 'Pending')
                                            <span class="badge badge-pill badge-warning">Pending</span>
                                        @elseif ($peminjamanKunciSiswa->status == 'Dipinjam')
                                            <span class="badge badge-pill badge-primary">Dipinjam</span>
                                        @else
                                            <span class="badge badge-pill badge-success">Dikembalikan</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">
                                                @if ($peminjamanKunciSiswa->status == 'Pending')
                                                    <form action="/peminjaman_kunci_siswa/{{ $peminjamanKunciSiswa->id }}"
                                                        method="POST" class="d-inline">
                                                        @method('put')
                                                        @csrf
                                                        <button type="submit" class="btn btn-small text-info">
                                                            <i class=" fa fa-info-circle"></i><span class="ml-2">Terima</span>
                                                        </button>
                                                    </form>
                                                @elseif ($peminjamanKunciSiswa->status == 'Dipinjam' or 'Dikembalikan')
                                                    <form action="/peminjaman_kunci_siswa/{{ $peminjamanKunciSiswa->id }}"
                                                        method="POST" class="d-inline">
                                                        @method('put')
                                                        @csrf
                                                        <button type="submit" class="btn btn-small text-success">
                                                            <i class=" fa fa-check-circle"></i><span class="ml-2">Dikembalikan</span>
                                                        </button>
                                                    </form>
                                                    <form action="/peminjaman_kunci_siswa/{{ $peminjamanKunciSiswa->id }}"
                                                        method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-small text-danger">
                                                            <i class=" fa fa-trash"></i><span class="ml-2">Delete</span>
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">Kode Peminjaman</th>
                                {{-- <th scope="col" class="text-center">Nama Peminjam</th> --}}
                                {{-- <th scope="col" class="text-center">NIPD</th> --}}
                                <th scope="col" class="text-center">Kunci Ruangan</th>
                                <th scope="col" class="text-center">Kelas</th>
                                <th scope="col" class="text-center">Tanggal Pinjam</th>
                                <th scope="col" class="text-center">Tanggal Kembali</th>
                                <th scope="col" class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peminjamankuncisiswas as $peminjamanKunciSiswa)
                                <tr>
                                    <th scope="row" class="text-center"><strong>{{ $loop->iteration }}</strong></th>
                                    <td class="text-center">
                                        <a href="{{ route('peminjaman_kunci_siswa.show', $peminjamanKunciSiswa->id) }}">
                                            PMKS-{{ $peminjamanKunciSiswa->id }}
                                        </a>
                                    </td>
                                    {{-- <td class="text-center">{{ $peminjamanKunciSiswa->nama_peminjam }}</td> --}}
                                    {{-- <td class="text-center">{{ $peminjamanKunciSiswa->nipd }}</td> --}}
                                    <td class="text-center">
                                        @foreach($peminjamanKunciSiswa->Kunci as $item)
                                            {{ $item->nama_kunci }}
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        @foreach($peminjamanKunciSiswa->Kelas as $item)
                                            {{ $item->ruang_kelas }}
                                        @endforeach
                                    </td>
                                    <td class="text-center">{{ $peminjamanKunciSiswa->tanggal_pinjam }}</td>
                                    <td class="text-center">{{ $peminjamanKunciSiswa->tanggal_kembali }}</td>
                                    <td class="text-center">
                                        @if($peminjamanKunciSiswa->status == 'Pending')
                                            <span class="badge badge-pill badge-warning">Pending</span>
                                        @elseif ($peminjamanKunciSiswa->status == 'Dipinjam')
                                            <span class="badge badge-pill badge-primary">Dipinjam</span>
                                        @else
                                            <span class="badge badge-pill badge-success">Dikembalikan</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
