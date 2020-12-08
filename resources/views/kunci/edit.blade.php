@extends('layouts/main')

@section('title', 'Edit Data Kunci')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Edit Kunci</h6>
        </div>

        <div class="card-body">
            <form class=" form-signin" action="/kunci/{{ $kunci->id }}" method="POST">
                @method('put')
                @csrf

                <div class="form-group">
                    <label for="nama_kunci">Nama Kunci</label>
                    <input type="text" class="form-control @error('nama_kunci') is-invalid @enderror" id="nama_kunci"
                        placeholder="Masukan Nama Kunci" name="nama_kunci" value="{{ $kunci->nama_kunci }}">
                    @error('nama_kunci')
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
    <a href="/kunci" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
