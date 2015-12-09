<?php

namespace TubesRAI;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    public function kader()
    {
    	return $this->belongsTo('TubesRAI\User');
    }
}
