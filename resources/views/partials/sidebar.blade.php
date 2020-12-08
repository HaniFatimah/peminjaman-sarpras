<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="{{ url('/home') }}">
        <img src="{{ asset('image/landingPage/shipping.png') }}" width="50" height="50" alt="">
        <div class="sidebar-brand-text mx-3">SIPPS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Action
    </div>

    @if (Auth::user()->role_id == "1")
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Master</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('/barang') }}">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span class="ml-1">Daftar Barang</span>
                    </a>
                    <a class="collapse-item" href="{{ url('/kunci') }}">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span class="ml-1">Daftar Kunci</span>
                    </a>
                    <a class="collapse-item" href="{{ url('/kelas_ruang') }}">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span class="ml-1">Daftar Kelas</span>
                    </a>
                    <a class="collapse-item" href="{{ url('/guru') }}">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span class="ml-1">Daftar Guru</span>
                    </a>
                    <a class="collapse-item" href="{{ url('/mapel') }}">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span class="ml-1">Daftar Mapel</span>
                    </a>
                    <a class="collapse-item" href="{{ url('/jabatan') }}">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span class="ml-1">Daftar Jabatan</span>
                    </a>
                    <a class="collapse-item" href="{{ url('/kategori_barang') }}">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span class="ml-1">Kategori Barang</span>
                    </a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#peminjamansiswa"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-handshake"></i>
                <span>Peminjaman Siswa</span>
            </a>
            <div id="peminjamansiswa" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('/peminjaman_barang_siswa') }}">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                        <span class="ml-1">Peminjaman Barang</span>
                    </a>
                    <a class="collapse-item" href="{{ url('/peminjaman_kunci_siswa') }}">
                        <i class="fas fa-fw fa-key"></i>
                        <span class="ml-1">Peminjaman Kunci</span>
                    </a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#peminjamanguru"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-handshake"></i>
                <span>Peminjaman Guru</span>
            </a>
            <div id="peminjamanguru" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('/peminjaman_barang_guru') }}">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                        <span class="ml-1">Peminjaman Barang</span>
                    </a>
                    <a class="collapse-item" href="{{ url('/peminjaman_kunci_guru') }}">
                        <i class="fas fa-fw fa-key"></i>
                        <span class="ml-1">Peminjaman Kunci</span>
                    </a>
                </div>
            </div>
        </li>
    @else
        @if (auth()->user()->role_id == "4")
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#peminjamansiswa"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-handshake"></i>
                    <span>Peminjaman Siswa</span>
                </a>
                <div id="peminjamansiswa" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ url('/peminjaman_barang_siswa') }}">
                            <i class="fas fa-fw fa-shopping-cart"></i>
                            <span class="ml-1">Peminjaman Barang</span>
                        </a>
                        <a class="collapse-item" href="{{ url('/peminjaman_kunci_siswa') }}">
                            <i class="fas fa-fw fa-key"></i>
                            <span class="ml-1">Peminjaman Kunci</span>
                        </a>
                    </div>
                </div>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#peminjamanguru"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-handshake"></i>
                    <span>Peminjaman Guru</span>
                </a>
                <div id="peminjamanguru" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ url('/peminjaman_barang_guru') }}">
                            <i class="fas fa-fw fa-shopping-cart"></i>
                            <span class="ml-1">Peminjaman Barang</span>
                        </a>
                        <a class="collapse-item" href="{{ url('/peminjaman_kunci_guru') }}">
                            <i class="fas fa-fw fa-key"></i>
                            <span class="ml-1">Peminjaman Kunci</span>
                        </a>
                    </div>
                </div>
            </li>
        @endif
    @endif
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
