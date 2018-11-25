<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table="pesanan";

    protected $fillable  = [
        'bukti_pembayaran',
    ];

    // public $timestamps=false;

    // public function detail()
    // {
    // 	return $this->hashMany('App\DetailPesanan', 'id_pesanan');
    // }
    
    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user');
    }

    public function stok()
    {
        return $this->belongsTo('App\Stok', 'id_stok');
    }
}
