<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapels')->insert([
            [
                'id' => '1',
                'nama_mapel' => 'Pendidikan Agama dan Budi Pekerti'
            ],
            [
                'id' => '2',
                'nama_mapel' => 'PKN'
            ],
            [
                'id' => '3',
                'nama_mapel' => 'Bhs. Indonesia'
            ],
            [
                'id' => '4',
                'nama_mapel' => 'Matematika'
            ],
            [
                'id' => '5',
                'nama_mapel' => 'Sejarah Indonesia'
            ],
            [
                'id' => '6',
                'nama_mapel' => 'Bhs. Inggris'
            ],
            [
                'id' => '7',
                'nama_mapel' => 'Seni Budaya'
            ],
            [
                'id' => '8',
                'nama_mapel' => 'Prakarya dan Kewirausahaan'
            ],
            [
                'id' => '9',
                'nama_mapel' => 'Pendidikan Jasmani, Olah Raga & Kesehatan'
            ],
            [
                'id' => '10',
                'nama_mapel' => 'Simulasi Digital'
            ],
            [
                'id' => '11',
                'nama_mapel' => 'Fisika & Kimia'
            ],
            [
                'id' => '12',
                'nama_mapel' => 'Pengantar Seni'
            ],
            [
                'id' => '13',
                'nama_mapel' => 'Sistem Komputer'
            ],
            [
                'id' => '14',
                'nama_mapel' => 'Komputer dan Jaringan Dasar'
            ],
            [
                'id' => '15',
                'nama_mapel' => 'Pemrograman Dasar'
            ],
            [
                'id' => '16',
                'nama_mapel' => 'Dasar Design Grafis'
            ],
            [
                'id' => '17',
                'nama_mapel' => 'Teknologi Infrastruktur Jaringan'
            ],
            [
                'id' => '18',
                'nama_mapel' => 'Rancang Bangun Jaringan'
            ],
            [
                'id' => '19',
                'nama_mapel' => 'Administrasi Server dan Keamanan Jaringan'
            ],
            [
                'id' => '20',
                'nama_mapel' => 'Teknologi Layanan Jaringan'
            ],
            [
                'id' => '21',
                'nama_mapel' => 'Pengembangan Produk Kreatif'
            ],
            [
                'id' => '22',
                'nama_mapel' => 'Perakitan Komputer dan Sistem Operasi'
            ],
            [
                'id' => '23',
                'nama_mapel' => 'Pengantar   Multimedia'
            ],
            [
                'id' => '24',
                'nama_mapel' => 'Teknik Pengolahan Audio Video'
            ],
            [
                'id' => '25',
                'nama_mapel' => 'Teknik Animasi 2D & 3D'
            ],
            [
                'id' => '26',
                'nama_mapel' => 'Desain Media Interaktif'
            ],
            [
                'id' => '27',
                'nama_mapel' => 'Pemodelan Perangkat Lunak'
            ],
            [
                'id' => '28',
                'nama_mapel' => 'Basis Data'
            ],
            [
                'id' => '29',
                'nama_mapel' => 'Pemrograman Berorientasi Obyek'
            ],
            [
                'id' => '30',
                'nama_mapel' => 'Pemrograman Web dan Mobile'
            ],
            [
                'id' => '31',
                'nama_mapel' => 'Dasar-dasar Kreativitas'
            ],
            [
                'id' => '32',
                'nama_mapel' => 'Komunikasi Massa'
            ],
            [
                'id' => '33',
                'nama_mapel' => 'Dasar Seni Audio Visual'
            ],
            [
                'id' => '34',
                'nama_mapel' => 'Produksi Audio Visual'
            ],
            [
                'id' => '35',
                'nama_mapel' => 'Penulisan Naskah dan Manajemen Produksi'
            ],
            [
                'id' => '36',
                'nama_mapel' => 'Tata Kamera, Suara dan Pencahayaan'
            ],
            [
                'id' => '37',
                'nama_mapel' => 'Tata Artistik'
            ],
            [
                'id' => '38',
                'nama_mapel' => 'Penyutradaraan'
            ],
            [
                'id' => '39',
                'nama_mapel' => 'Editing'
            ],
            [
                'id' => '40',
                'nama_mapel' => 'Kerja Bengkel dan Gambar Teknik'
            ],
            [
                'id' => '41',
                'nama_mapel' => 'Dasar Listrik dan Elektronika'
            ],
            [
                'id' => '42',
                'nama_mapel' => 'Pemrograman, Mikroprosessor dan Mikrokontroller'
            ],
            [
                'id' => '43',
                'nama_mapel' => 'Penerapan Rangkaian Elektronika'
            ],
            [
                'id' => '44',
                'nama_mapel' => 'Sistem Pengendali Elektronik'
            ],
            [
                'id' => '45',
                'nama_mapel' => 'Pengendali  Sistem  Robotik'
            ],
            [
                'id' => '46',
                'nama_mapel' => 'Pembuatan , Perbaikan dan Pemeliharaan Peralatan Elektronika'
            ],
        ]);
    }
}
