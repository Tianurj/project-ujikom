<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama'];

    public function barang()
    {
        return $this->hasMany('App\Kategori', 'kategori_id');
    }
}
