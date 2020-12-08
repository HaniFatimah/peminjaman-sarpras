@extends('layouts/main')

@section('title', 'Edit Data Jabatan')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Edit Jabatan</h6>
        </div>

        <div class="card-body">
            <form class=" form-signin" action="/jabatan/{{ $jabatan->id }}" method="POST">
                @method('put')
                @csrf

                <div class="form-group">
                    <label for="nama_jabatan">Nama Jabatan</label>
                    <input type="text" class="form-control @error('nama_jabatan') is-invalid @enderror" id="nama_jabatan"
                        placeholder="Masukan Nama Jabatan" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}">
                    @error('nama_jabatan')
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
    <a href="/jabatan" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
