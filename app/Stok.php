<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table="stok";

    public $timestamps=false;

    public function stok()
    {
    	return $this->hashMany('App\Pesanan', 'id_stok');
    }
}
