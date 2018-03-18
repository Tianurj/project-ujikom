<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KategoriSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(KontakSeeder::class);
        $this->call(TentangSeeder::class);

    }
}
