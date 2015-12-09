<?php

namespace TubesRAI;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    public function kader()
    {
    	return $this->belongsTo('TubesRAI\User');
    }
}
