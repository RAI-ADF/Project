<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $table = 'newss';
    protected $fillable = ['nik', 'title','content'];

	public function staff()
	{
		return $this->belongsTo('App\Staff','nik');
	}
}



