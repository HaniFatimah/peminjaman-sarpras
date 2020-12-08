<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KunciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuncis')->insert([
            [
                'id' => '1',
                'nama_kunci' => 'Kunci Lab Network Advance'
            ],
            [
                'id' => '2',
                'nama_kunci' => 'Kunci Lab Network'
            ],
            [
                'id' => '3',
                'nama_kunci' => 'Kunci Lab Simulasi Digital'
            ],
            [
                'id' => '4',
                'nama_kunci' => 'Kunci  Lab Multimedia Medium'
            ],
            [
                'id' => '5',
                'nama_kunci' => 'Kunci  Lab Multimedia Advance'
            ],
            [
                'id' => '6',
                'nama_kunci' => 'Kunci  Lab Pemrograman Basic'
            ],
            [
                'id' => '7',
                'nama_kunci' => 'Kunci Lab Pemrograman Advance'
            ],
            [
                'id' => '8',
                'nama_kunci' => 'Lab Bahasa Inggris'
            ],
            [
                'id' => '9',
                'nama_kunci' => 'Kunci Lab Video dan Audio Editing'
            ],
            [
                'id' => '10',
                'nama_kunci' => 'Kunci Ruang Tefa'
            ],
            [
                'id' => '11',
                'nama_kunci' => 'Kunci  Ruang SAMSUNG'
            ],
            [
                'id' => '12',
                'nama_kunci' => 'Kunci Ruang 1'
            ],
            [
                'id' => '13',
                'nama_kunci' => 'Kunci Ruang 2'
            ],
            [
                'id' => '14',
                'nama_kunci' => 'Kunci Ruang 3'
            ],
            [
                'id' => '15',
                'nama_kunci' => 'Kunci Ruang 4'
            ],
            [
                'id' => '16',
                'nama_kunci' => 'Kunci Ruang 5'
            ],
            [
                'id' => '17',
                'nama_kunci' => 'Kunci Ruang 6'
            ],
            [
                'id' => '18',
                'nama_kunci' => 'Kunci Ruang 7'
            ],
            [
                'id' => '19',
                'nama_kunci' => 'Kunci Ruang 8'
            ],
            [
                'id' => '20',
                'nama_kunci' => 'Kunci Ruang 9'
            ],
            [
                'id' => '21',
                'nama_kunci' => 'Kunci Ruang 10'
            ],
            [
                'id' => '22',
                'nama_kunci' => 'Kunci Ruang 11'
            ],
            [
                'id' => '23',
                'nama_kunci' => 'Kunci Ruang 12'
            ],
            [
                'id' => '24',
                'nama_kunci' => 'Kunci Ruang 13'
            ],
            [
                'id' => '25',
                'nama_kunci' => 'Kunci Ruang 14'
            ],
            [
                'id' => '26',
                'nama_kunci' => 'Kunci Ruang 15'
            ],
            [
                'id' => '27',
                'nama_kunci' => 'Kunci Ruang 16'
            ],
            [
                'id' => '28',
                'nama_kunci' => 'Kunci Ruang 17'
            ],
            [
                'id' => '29',
                'nama_kunci' => 'Kunci Ruang 18'
            ],
        ]);
    }
}
