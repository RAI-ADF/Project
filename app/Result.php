<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
	protected $fillable = ['iduser', 'vote', 'slug'];
	
    //
    public function getIdUser()
	{
    	return $this->iduser;
	}

	 public function getSlug()
	{
    	return $this->slug;
	}

	 public function getVote()
	{
    	return $this->vote;
	}

}
