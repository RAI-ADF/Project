<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangan';
    protected $fillable = array('harga','ketersediaan','harga');
    public $timestamps = true;

    public function tipe_lap() { 
		return $this->hasOne('App\tipe_lap'); 
	} 
}
