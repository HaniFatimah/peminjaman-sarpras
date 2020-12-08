@extends('layouts/main')

@section('title', 'Tambah Data Mapel')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Tambah Mapel</h6>
        </div>

        <div class="card-body">
            <form class=" form-signin" action="/mapel" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama_mapel">Nama mapel</label>
                    <input type="text" class="form-control @error('nama_mapel') is-invalid @enderror" id="nama_mapel"
                        placeholder="Masukan Nama Mapel" name="nama_mapel" value="{{ old('nama_mapel') }}">
                    @error('nama_mapel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button style="width: 15%;" class="btn btn-small btn-success btn-block" type="submit"><i
                            class="far fa-save"></i><span class="ml-2">save changes</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <a href="/mapel" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
