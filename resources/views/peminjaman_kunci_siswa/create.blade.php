@extends('layouts/main')

@section('title', 'Tambah Data Peminjaman Kunci Siswa')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Tambah Peminjaman Kunci Siswa</h6>
        </div>

        <div class="card-body">
            <form class=" form-signin" action="/peminjaman_kunci_siswa" method="POST">
                @csrf

                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">

                @if (auth()->user()->role_id == '1')
                <div class="form-group">
                    <label for="nama_peminjam">Nama Peminjam</label>
                    <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror" id="nama_peminjam"
                        placeholder="Masukan Nama Peminjam" name="nama_peminjam"
                        value="{{ old('nama_peminjam') }}">
                    @error('nama_peminjam')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                @elseif (auth()->user()->role_id == '4')
                <div class="form-group">
                    <label for="nama_peminjam">Nama Peminjam</label>
                    <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror" id="nama_peminjam"
                        placeholder="Masukan Nama Peminjam" name="nama_peminjam"
                        value="{{ Auth::user()->name }}" disabled>
                    @error('nama_peminjam')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <input type="hidden" id="nama_peminjam" name="nama_peminjam" value="{{ Auth::user()->name }}">
                </div>
                @endif

                @if (auth()->user()->nipd == null)
                    <div class="form-group">
                        <label for="nipd">NIPD</label>
                        <input type="number" class="form-control @error('nipd') is-invalid @enderror" id="nipd"
                            placeholder="Masukan NIPD" name="nipd"
                            value="{{ old('nipd') }}">
                        @error('nipd')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                @else
                    <div class="form-group">
                        <label for="nipd">NIPD</label>
                        <input type="number" class="form-control @error('nipd') is-invalid @enderror" id="nipd"
                            placeholder="Masukan NIPD" name="nipd"
                            value="{{ Auth::user()->nipd }}" disabled>
                        @error('nipd')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input type="hidden" id="nipd" name="nipd" value="{{ Auth::user()->nipd }}">
                    </div>
                @endif

                <div class="form-group">
                    <label for="kunci_id">Kunci Ruangan</label>
                    <div class="input-group mb-3">
                        <select class="custom-select form-control @error('kunci_id') is-invalid @enderror"
                            id="kunci_id" placeholder="Masukan Mapel" name="kunci_id"
                            value="{{ old('kunci_id') }}">
                            <option selected>Choose...</option>
                            @foreach($kuncis as $kunci)
                                <option value="{{ $kunci->id }}">
                                    {{ $kunci->nama_kunci }}
                                </option>
                            @endforeach
                        </select>
                        @error('kunci_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="kelas_id">Kelas</label>
                    <div class="input-group mb-3">
                        <select class="custom-select form-control @error('kelas_id') is-invalid @enderror"
                            id="kelas_id" placeholder="Masukan Guru" name="kelas_id"
                            value="{{ old('kelas_id') }}">
                            <option selected>Choose...</option>
                            @foreach($kelass as $kelas)
                                <option value="{{ $kelas->id }}">
                                    {{ $kelas->ruang_kelas }}
                                </option>
                            @endforeach
                        </select>
                        @error('kelas_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-4">
                    <label for="tanggal_pinjam">Tanggal Pinjam Barang</label>
                    <input type="datetime-local" class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                        id="tanggal_pinjam" placeholder="Masukan Tanggal Pinjam Barang" name="tanggal_pinjam"
                        value="{{ $date }}" disabled>
                    @error('tanggal_pinjam')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <input type="hidden" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ $date }}">
                </div>

                <div class="form-group col-4">
                    <label for="tanggal_kembali">Tanggal Kembali Barang</label>
                    <input type="datetime-local" class="form-control @error('tanggal_kembali') is-invalid @enderror"
                        id="tanggal_kembali" placeholder="Masukan Tanggal Kembali Barang" name="tanggal_kembali"
                        value="{{ old('tanggal_kembali') }}">
                    @error('tanggal_kembali')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <input type="hidden" name="status" id="status" value="Pending">

                <div class="form-group">
                    <button style="width: 15%;" class="btn btn-small btn-success btn-block" type="submit"><i
                            class="far fa-save"></i><span class="ml-2">save changes</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <a href="/peminjaman_kunci_siswa" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
