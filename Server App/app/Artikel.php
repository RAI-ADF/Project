<?php

namespace TubesRAI;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
	protected $fillable = ['kader_id', 'judul', 'isi'];

	public function kader()
	{
		return $this->belongsTo('TubesRAI\User');
	}
}
