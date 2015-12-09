<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class utamaController extends Controller
{
 public function indeks(){
		return view('indeks'); 		// view page '/resources/views/home.php'
	}
}
