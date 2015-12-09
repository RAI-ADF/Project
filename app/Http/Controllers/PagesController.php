<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

     public function home()
    {
        return view('welcome');
    }

    public function result()
    {
        return view('result');
    }

     public function create()
    {
        return view('questions.create');
    }

    public function contact()
    {   
        return view('questions.create');
    }

    
}
