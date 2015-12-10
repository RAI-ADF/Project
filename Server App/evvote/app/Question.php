<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['question', 'option1', 'option2', 'option3', 'option4','slug'];
	
    //
    public function getQuestion()
	{
    	return $this->question;
	}

	 public function getOption1()
	{
    	return $this->option1;
	}

	 public function getOption2()
	{
    	return $this->option2;
	}

	 public function getOption3()
	{
    	return $this->option3;
	}

	public function getOption4()
	{
    	return $this->option4;
	}
}
