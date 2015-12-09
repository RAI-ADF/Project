<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function participant()
	{
		return $this->hasOne('App\Participant','nim')
	}
}

