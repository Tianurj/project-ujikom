<?php

use Illuminate\Database\Seeder;
use App\Kontak;
class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kontak = new Kontak();
        $kontak->keterangan = "";
        $kontak->save();
    }
}
