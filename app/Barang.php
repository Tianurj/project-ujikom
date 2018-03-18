<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama','nama','nama','jumlah','foto','harga','hargajual','keterangan'];
    
    public function kategori()
    {
    	return $this->belongsTo('App\Kategori','kategori_id');
    }

     public function penitip()
    {
    	return $this->belongsTo('App\Penitip','penitip_id');
    }
}
