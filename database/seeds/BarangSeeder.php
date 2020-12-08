<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'id' => '1',
                'kategori_id' => '4',
                'kode_barang' => '12345',
                'nama_barang' => 'Laptop',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'laptop.png'
            ],
            [
                'id' => '2',
                'kategori_id' => '2',
                'kode_barang' => '12345',
                'nama_barang' => 'Proyektor',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'proyektor.png'
            ],
            [
                'id' => '3',
                'kategori_id' => '3',
                'kode_barang' => '12345',
                'nama_barang' => 'Kabel Power',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'kabel power.png'
            ],
            [
                'id' => '4',
                'kategori_id' => '3',
                'kode_barang' => '12345',
                'nama_barang' => 'Kabel HDMI',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'kabel hdmi.png'
            ],
            [
                'id' => '5',
                'kategori_id' => '3',
                'kode_barang' => '12345',
                'nama_barang' => 'Kabel VGA',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'kabel vga.png'
            ],
            [
                'id' => '6',
                'kategori_id' => '3',
                'kode_barang' => '12345',
                'nama_barang' => 'Kabel Roll',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'kabel roll.png'
            ],
            [
                'id' => '7',
                'kategori_id' => '4',
                'kode_barang' => '12345',
                'nama_barang' => 'Pen Tablet',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'pen tablet.png'
            ],
            [
                'id' => '8',
                'kategori_id' => '4',
                'kode_barang' => '12345',
                'nama_barang' => 'Kamera',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'kamera.png'
            ],
            [
                'id' => '9',
                'kategori_id' => '4',
                'kode_barang' => '12345',
                'nama_barang' => 'Speaker',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'speaker.png'
            ],
            [
                'id' => '10',
                'kategori_id' => '4',
                'kode_barang' => '12345',
                'nama_barang' => 'Mouse',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'mouse.png'
            ],
            [
                'id' => '11',
                'kategori_id' => '4',
                'kode_barang' => '12345',
                'nama_barang' => 'Lighting',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'lighting.png'
            ],
            [
                'id' => '12',
                'kategori_id' => '4',
                'kode_barang' => '12345',
                'nama_barang' => 'Stabilizer',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'stabilizer.png'
            ],
            [
                'id' => '13',
                'kategori_id' => '4',
                'kode_barang' => '12345',
                'nama_barang' => 'Stand Lighting',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'stand lighting.png'
            ],
            [
                'id' => '14',
                'kategori_id' => '4',
                'kode_barang' => '12345',
                'nama_barang' => 'Blower',
                'kondisi_barang' => 'Bagus',
                'tahun_pembelian' => '12/1/2020',
                'gambar_barang' => 'blower.png'
            ],
        ]);
    }
}
