<?php

use Illuminate\Database\Seeder;
use App\Kategori;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = new Kategori();
        $kategori->nama = "Alat Musik";
        $kategori->save();
        
        $kategori = new Kategori();
        $kategori->nama = "Perabotan";
        $kategori->save();
    }
}
