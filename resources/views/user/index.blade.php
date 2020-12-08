@extends('layouts/main')

@section('title', 'Tabel Peminjaman Kunci Siswa')

@section('container')
<div class="container">
    <div class="main-body">

        <!-- Flash Data -->
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        @foreach ($auths as $user)
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('image/upload/avatar/'.$user->avatar) }}" alt="User"
                                class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{ Auth::user()->name }}</h4>
                                <a href="/user/{{ $user->id }}/edit" class="btn btn-primary text-primary">
                                    <i class="fa fa-edit text-white"></i><span class="ml-2 text-white">Edit Profile</span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->name }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                        @if (auth()->user()->role_id == "3")
                        <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">NIK</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->nik }}
                                </div>
                            </div>
                        <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Jabatan</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                        @foreach ($auths as $user)
                                            @foreach($user->Jabatan as $item)
                                                {{ $item->nama_jabatan }}
                                            @endforeach
                                        @endforeach
                                </div>
                            </div>
                        @elseif (auth()->user()->role_id == "4")
                        <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">NIPD</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->nipd }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
