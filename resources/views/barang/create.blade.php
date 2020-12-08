@extends('layouts/main')

@section('title', 'Tambah Data Barang')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Tambah Barang</h6>
        </div>

        <div class="card-body">
            <form class=" form-signin" action="/barang" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="kategori_id">Kategori Barang</label>
                    <div class="input-group mb-3">
                        <select class="custom-select form-control @error('kategori_id') is-invalid @enderror"
                            id="kategori_id" placeholder="Masukan Kategori Barang" name="kategori_id"
                            value="{{ old('kategori_id') }}">
                            <option selected>Choose...</option>
                            @foreach($kategoribarangs as $kategoribarang)
                                <option value="{{ $kategoribarang->id }}">
                                    {{ $kategoribarang->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="number" class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang"
                        placeholder="Masukan Kode Barang" name="kode_barang"
                        value="{{ old('kode_barang') }}">
                    @error('kode_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang"
                        placeholder="Masukan Nama Barang" name="nama_barang"
                        value="{{ old('nama_barang') }}">
                    @error('nama_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kondisi_barang">Kondisi Barang</label>
                    <input type="text" class="form-control @error('kondisi_barang') is-invalid @enderror"
                        id="kondisi_barang" placeholder="Masukan Kondisi Barang" name="kondisi_barang"
                        value="{{ old('kondisi_barang') }}">
                    @error('kondisi_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tahun_pembelian">Tahun Pembelian Barang</label>
                    <input type="date" class="form-control @error('tahun_pembelian') is-invalid @enderror"
                        id="tahun_pembelian" placeholder="Masukan Tahun Pembelian Barang" name="tahun_pembelian"
                        value="{{ old('tahun_pembelian') }}">
                    @error('tahun_pembelian')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gambar_barang">Gambar barang</label><br>
                    <input type="file" id="gambar_barang" name="gambar_barang" accept="image/png, image/jpeg"
                        value="{{ old('gambar_barang') }}"><br>
                        <span class="text-danger">*jpeg/png</span>
                </div>

                <div class="form-group">
                    <button style="width: 15%;" class="btn btn-small btn-success btn-block" type="submit"><i
                            class="far fa-save"></i><span class="ml-2">save changes</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <a href="/barang" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
