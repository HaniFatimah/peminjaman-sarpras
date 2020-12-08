<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KategoriBarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_barangs')->insert([
            [
                'id' => '1',
                'nama_kategori' => 'Alat Tulis'
            ],
            [
                'id' => '2',
                'nama_kategori' => 'Proyektor'
            ],
            [
                'id' => '3',
                'nama_kategori' => 'Kabel'
            ],
            [
                'id' => '4',
                'nama_kategori' => 'ALat Elektronik'
            ],
        ]);
    }
}
