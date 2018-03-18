<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penitip extends Model
{
	protected $table = 'penitip';
    protected $fillable = ['nama','alamat','no_tlp','no_ktp','tgl_titip'];
    protected $visible=['nama','alamat','no_tlp','no_ktp','tgl_titip'];

    public function barang()
    {
    return $this->hasMany('App\Penitip', 'penitip_id');
    }

}