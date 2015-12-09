<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class registerController extends Controller
{
 public function indeks(){
		return view('register');
		var_dump($_POST); 		// view page '/resources/views/home.php'
	}
}

