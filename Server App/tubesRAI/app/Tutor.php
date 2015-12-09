<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    public function user()
	{
		return $this->belongsTo('App\User','username');
	}

	public function presence(){
		return $this->hasMany('App\Presence','nim_tutor');
	}

}

