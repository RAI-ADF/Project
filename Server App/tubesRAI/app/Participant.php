<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    //
	public function user()
	{
		return $this->belongsTo('App\User','username');
	}

	public function payment()
	{
		return $this->belongsTo('App\Payment','nim');
	}

	public function presence(){
		return $this->hasMany('App\Presence','nim_participant');
	}
}