<?php

namespace TubesRAI;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
	protected $fillable = ['kader_id', 'jenis', 'nama', 'tingkat', 'waktu', 'tempat', 'peringkat'];

    public function kader()
    {
    	return $this->belongsTo('TubesRAI\User');
    }
}
