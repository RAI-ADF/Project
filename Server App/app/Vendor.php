<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendor';
    protected $fillable = array('nama', 'alamat','telepon','fasilitas','peraturan');
    public $timestamps = true;

    public function lapangan() { 
		return $this->hasMany('App\Lapangan'); 
	} 

}
