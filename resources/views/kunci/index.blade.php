@extends('layouts/main')

@section('title', 'Tabel Kunci')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Kunci</h1>
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
            <a href="/kunci/create" class="text-primary">
                <i class="fas fa-plus"><span class="ml-2">Tambah Kunci</span></i>
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">No.</th>
                            <th scope="col" class="text-center">Nama Kunci</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kuncis as $kunci)
                        <tr>
                            <th scope="row" class="text-center"><strong>{{ $loop->iteration }}</strong></th>
                            <td class="text-center">{{ $kunci->nama_kunci }}</td>
                            <td class="text-center">
                                <a href="/kunci/{{ $kunci->id }}/edit" class="btn btn-small text-success">
                                    <i class="fa fa-edit"></i><span class="ml-2">Edit</span>
                                </a>
                                <form action="/kunci/{{ $kunci->id }}" method="POST" class="d-inline">
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
