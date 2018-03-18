<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
	protected $table='penjualans';
    protected $fillable = ['tgl','penitip_id','barang_id','jumlah_beli','harga','total'];
    protected $visible = ['tgl','penitip_id','barang_id','jumlah_beli','harga','total'];
    public $timestamps=true;

     public function penitip()
    {
    	return $this->belongsTo('App\Penitip','penitip_id');
    }

     public function barang()
    {
    	return $this->belongsTo('App\Barang','barang_id');
    }
}
