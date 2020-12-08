<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KelasRuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas_ruangs')->insert([
            [
                'id' => '1',
                'ruang_kelas' => 'X TKJ 1'
            ],
            [
                'id' => '2',
                'ruang_kelas' => 'X TKJ 2'
            ],
            [
                'id' => '3',
                'ruang_kelas' => 'X TKJ 3'
            ],
            [
                'id' => '4',
                'ruang_kelas' => 'X TKJ 4'
            ],
            [
                'id' => '5',
                'ruang_kelas' => 'X MM 1'
            ],
            [
                'id' => '6',
                'ruang_kelas' => 'X MM 2'
            ],
            [
                'id' => '7',
                'ruang_kelas' => 'X MM 3'
            ],
            [
                'id' => '8',
                'ruang_kelas' => 'X RPL 1'
            ],
            [
                'id' => '9',
                'ruang_kelas' => 'X RPL 2'
            ],
            [
                'id' => '10',
                'ruang_kelas' => 'X BC 1'
            ],
            [
                'id' => '11',
                'ruang_kelas' => 'X BC 2'
            ],
            [
                'id' => '12',
                'ruang_kelas' => 'X TEI'
            ],
            [
                'id' => '13',
                'ruang_kelas' => 'XI TKJ 1'
            ],
            [
                'id' => '14',
                'ruang_kelas' => 'XI TKJ 2'
            ],
            [
                'id' => '15',
                'ruang_kelas' => 'XI TKJ 3'
            ],
            [
                'id' => '16',
                'ruang_kelas' => 'XI TKJ 4'
            ],
            [
                'id' => '17',
                'ruang_kelas' => 'XI TKJ 5'
            ],
            [
                'id' => '18',
                'ruang_kelas' => 'XI MM 1'
            ],
            [
                'id' => '19',
                'ruang_kelas' => 'XI MM 2'
            ],
            [
                'id' => '20',
                'ruang_kelas' => 'XI MM 3'
            ],
            [
                'id' => '21',
                'ruang_kelas' => 'XI RPL 1'
            ],
            [
                'id' => '22',
                'ruang_kelas' => 'XI RPL 2'
            ],
            [
                'id' => '23',
                'ruang_kelas' => 'XI RPL 3'
            ],
            [
                'id' => '24',
                'ruang_kelas' => 'XI BC 1'
            ],
            [
                'id' => '25',
                'ruang_kelas' => 'XI BC 2'
            ],
            [
                'id' => '26',
                'ruang_kelas' => 'XI BC 2'
            ],
            [
                'id' => '27',
                'ruang_kelas' => 'XI TEI'
            ],
            [
                'id' => '28',
                'ruang_kelas' => 'XII TKJ 1'
            ],
            [
                'id' => '29',
                'ruang_kelas' => 'XII TKJ 2'
            ],
            [
                'id' => '30',
                'ruang_kelas' => 'XII TKJ 3'
            ],
            [
                'id' => '31',
                'ruang_kelas' => 'XII TKJ 4'
            ],
            [
                'id' => '32',
                'ruang_kelas' => 'XII MM 1'
            ],
            [
                'id' => '33',
                'ruang_kelas' => 'XII MM 2'
            ],
            [
                'id' => '34',
                'ruang_kelas' => 'XII MM 3'
            ],
        ]);
    }
}
