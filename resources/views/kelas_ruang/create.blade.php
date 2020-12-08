@extends('layouts/main')

@section('title', 'Tambah Data Kelas')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Tambah Kelas</h6>
        </div>

        <div class="card-body">
            <form class=" form-signin" action="/kelas_ruang" method="POST">
                @csrf

                <div class="form-group">
                    <label for="ruang_kelas">Nama Kelas</label>
                    <input type="text" class="form-control @error('ruang_kelas') is-invalid @enderror" id="ruang_kelas"
                        placeholder="Masukan Nama Kelas" name="ruang_kelas" value="{{ old('ruang_kelas') }}">
                    @error('ruang_kelas')
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
    <a href="/kelas_ruang" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
