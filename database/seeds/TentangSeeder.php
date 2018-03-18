<?php

use Illuminate\Database\Seeder;
use App\Tentang;
class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tentang = new Tentang();
        $tentang->keterangan = "";
        $tentang->save();
    }
}
