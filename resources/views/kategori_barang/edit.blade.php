@extends('layouts/main')

@section('title', 'Edit Data Kategori Barang')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Edit Kategori Barang</h6>
        </div>

        <div class="card-body">
            <form class=" form-signin" action="/kategori_barang/{{ $kategoriBarang->id }}" method="POST">
                @method('put')
                @csrf

                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori Barang</label>
                    <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori"
                        placeholder="Masukan Nama Kategori" name="nama_kategori" value="{{ $kategoriBarang->nama_kategori }}">
                    @error('nama_kategori')
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
    <a href="/kategori_barang" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
