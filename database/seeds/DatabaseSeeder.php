<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KategoriBarangsSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(JabatanSeeder::class);
        $this->call(KunciSeeder::class);
        $this->call(KelasRuangSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(BarangSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
