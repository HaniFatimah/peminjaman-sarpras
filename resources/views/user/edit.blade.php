@extends('layouts/main')

@section('title', 'Edit Data User')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Edit Profile User</h6>
        </div>

        <div class="card-body">
            <form class=" form-signin" action="/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Masukan Nama" name="name" value="{{ $user->name }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Masukan Email" name="email" value="{{ $user->email }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                @if (auth()->user()->role_id == '3')
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik"
                            placeholder="Masukan NIK" name="nik" value="{{ $user->nik }}">
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan_id">Jabatan</label>
                        <div class="input-group mb-3">
                            <select class="custom-select form-control @error('jabatan_id') is-invalid @enderror"
                                id="jabatan_id" placeholder="Masukan Jabatan" name="jabatan_id"
                                value="{{ old('jabatan_id') }}">
                                <option>Choose...</option>
                                @foreach($jabatans as $jabatan)
                                    <option value="{{ $jabatan->id }}"
                                        @if ($jabatan->id == $user->jabatan_id)
                                            selected
                                        @endif>
                                        {{ $jabatan->nama_jabatan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jabatan_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                @elseif (auth()->user()->role_id == '4')
                    <div class="form-group">
                        <label for="nipd">NIPD</label>
                        <input type="number" class="form-control @error('nipd') is-invalid @enderror" id="nipd"
                            placeholder="Masukan NIPD" name="nipd" value="{{ $user->nipd }}">
                        @error('nipd')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                @endif

                <div class="form-group">
                    <label for="avatar">Foto Profile</label>
                    <div class="col-md-6">
                        <img class="img-fluid" width="200px" src="{{ asset('image/upload/avatar/'.$user->avatar) }}" />
                    </div>
                    <input class="mt-2" type="file" id="avatar" name="avatar" value="{{ $user->avatar }}">
                    <br>
                    <span class="text-danger"><span class="text-danger mr-3">*img 200 X 200</span>*jpeg/jpg/png</span>
                </div>

                <div class="form-group">
                    <button style="width: 15%;" class="btn btn-small btn-success btn-block" type="submit"><i
                            class="far fa-save"></i><span class="ml-2">save changes</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <a href="/user" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- container-fluid -->
@endsection
