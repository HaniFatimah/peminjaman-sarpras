@extends('layouts/main')

@section('title', 'Tabel Barang')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
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
            <a href="/barang/create" class="text-primary">
                <i class="fas fa-plus"><span class="ml-2">Tambah Barang</span></i>
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">No.</th>
                            <th scope="col" class="text-center">Kategori Barang</th>
                            <th scope="col" class="text-center">Kode Barang</th>
                            <th scope="col" class="text-center">Nama Barang</th>
                            <th scope="col" class="text-center">Kondisi Barang</th>
                            <th scope="col" class="text-center">Tahun Pembelian Barang</th>
                            <th scope="col" class="text-center">Gambar Barang</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barangs as $barang)
                        <tr>
                            <th scope="row" class="text-center"><strong>{{ $loop->iteration }}</strong></th>
                            <td class="text-center">
                                @foreach ($barang->KategoriBarang as $item)
                                    {{ $item->nama_kategori }}
                                @endforeach
                            </td>
                            <td class="text-center">{{ $barang->kode_barang }}</td>
                            <td class="text-center">{{ $barang->nama_barang }}</td>
                            <td class="text-center">{{ $barang->kondisi_barang }}</td>
                            <td class="text-center">{{ $barang->tahun_pembelian }}</td>
                            <td class="text-center"><img class="img-fluid" width="150px" src="{{ asset('image/upload/'.$barang->gambar_barang) }}"></td>
                            <td class="text-center">
                                <a href="/barang/{{ $barang->id }}/edit" class="btn btn-small text-success">
                                    <i class="fa fa-edit"></i><span class="ml-2">Edit</span>
                                </a>
                                <form action="/barang/{{ $barang->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-small text-danger">
                                        <i class=" fa fa-trash"></i><span class="ml-2">Delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
