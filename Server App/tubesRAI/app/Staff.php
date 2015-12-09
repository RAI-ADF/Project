<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function user()
	{
		return $this->belongsTo('App\User','username');
	}

	public function news()
	{
		return $this->hasMany('App\News','nik');
	}

	public function activity()
	{
		return $this->hasMany('App\Activity','nik');
	}
}

