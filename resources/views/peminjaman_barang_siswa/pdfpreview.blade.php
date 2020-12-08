<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Peminjaman Barang Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-center">Laporan Data Peminjaman Barang Siswa</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center" style="font-size: 10px">No.</th>
                            <th scope="col" class="text-center" style="font-size: 10px">Kode Peminjaman</th>
                            <th scope="col" class="text-center" style="font-size: 10px">Nama Peminjam</th>
                            <th scope="col" class="text-center" style="font-size: 10px">NIPD</th>
                            <th scope="col" class="text-center" style="font-size: 10px">Barang</th>
                            <th scope="col" class="text-center" style="font-size: 10px">Guru</th>
                            <th scope="col" class="text-center" style="font-size: 10px">Mapel</th>
                            <th scope="col" class="text-center" style="font-size: 10px">Kelas</th>
                            <th scope="col" class="text-center" style="font-size: 10px">Tanggal Pinjam</th>
                            <th scope="col" class="text-center" style="font-size: 10px">Tanggal Kembali</th>
                            <th scope="col" class="text-center" style="font-size: 10px">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peminjamanbarangsiswas as $peminjamanBarangSiswa)
                            <tr>
                                <th scope="row" class="text-center" style="font-size: 9px"><strong>{{ $loop->iteration }}</strong></th>
                                <td class="text-center" style="font-size: 9px">PMBS-{{ $peminjamanBarangSiswa->id }}</td>
                                <td class="text-center" style="font-size: 9px">{{ $peminjamanBarangSiswa->nama_peminjam }}</td>
                                <td class="text-center" style="font-size: 9px">{{ $peminjamanBarangSiswa->nipd }}</td>
                                <td class="text-center" style="font-size: 9px">
                                    @foreach($peminjamanBarangSiswa->Barang as $item)
                                        {{ $item->nama_barang }}
                                    @endforeach
                                </td>
                                <td class="text-center" style="font-size: 9px">
                                    @foreach($peminjamanBarangSiswa->Guru as $item)
                                        {{ $item->nama_guru }}
                                    @endforeach
                                </td>
                                <td class="text-center" style="font-size: 9px">
                                    @foreach($peminjamanBarangSiswa->Mapel as $item)
                                        {{ $item->nama_mapel }}
                                    @endforeach
                                </td>
                                <td class="text-center" style="font-size: 9px">
                                    @foreach($peminjamanBarangSiswa->Kelas as $item)
                                        {{ $item->ruang_kelas }}
                                    @endforeach
                                </td>
                                <td class="text-center" style="font-size: 9px">{{ $peminjamanBarangSiswa->tanggal_pinjam }}</td>
                                <td class="text-center" style="font-size: 9px">{{ $peminjamanBarangSiswa->tanggal_kembali }}</td>
                                <td class="text-center" style="font-size: 9px">
                                    @if($peminjamanBarangSiswa->status == 'Pending')
                                        Pending
                                    @elseif ($peminjamanBarangSiswa->status == 'Dipinjam')
                                        Dipinjam
                                    @else
                                        Dikembalikan
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</body>
</html>
