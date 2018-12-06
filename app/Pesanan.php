<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table="pesanan";

    protected $fillable  = [
        'bukti_pembayaran',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user');
    }

    public function stok()
    {
        return $this->belongsTo('App\Stok', 'id_stok');
    }
}
