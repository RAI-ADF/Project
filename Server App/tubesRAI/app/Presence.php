<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    public function participant()
	{
		return $this->belongsTo('App\Participant','nim')
	}

	public function tutor()
	{
		return $this->belongsTo('App\Tutor','nim')
	}

	public function activity()
	{
		return $this->belongsTo('App\Activity','id')
	}
}

