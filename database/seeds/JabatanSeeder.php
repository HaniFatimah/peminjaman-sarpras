<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatans')->insert([
            [
                'id' => '1',
                'nama_jabatan' => 'Pembina'
            ],
            [
                'id' => '2',
                'nama_jabatan' => 'Pembina Muda'
            ],
        ]);
    }
}
