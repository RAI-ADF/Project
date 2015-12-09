<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    protected $table = 'sewa';
    protected $fillable = array('vendor_nama', 'vendor_alamat','vendor_telepon','vendor_fasilitas','vendor_peraturan');
    public $timestamps = true;

    public function lapangan() { 
		return $this->hasMany('App\Lapangan'); 
	} 

	 public function user() { 
		return $this->hasMany('App\User'); 
	} 
}
