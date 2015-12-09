<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\signInValidation;
use App\Http\Requests\signUpValidation;
use App\Http\Requests;
use Input;
use Hash;
use DB;
use Redirect;
use Auth;
use App\Http\Controllers\Controller;

class lelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignUpValidation $data)
    {
        $email = Input::get('email');
        $fullname = Input::get('fullname');
        $password = Hash::make($data->password);
        $address = Input::get('address');
        $phone = Input::get('phone');
        $data1 = array(
            'email'=>$email,
            'fullname'=>$fullname,
            'address'=>$address,
            'phone'=>$phone
        );
        $data2 = array(
            'email'=>$email,
            'password'=>$password,
            'hak_akses'=>1
        );
        DB::table('member')->insert($data1);
        DB::table('users')->insert($data2);
        return Redirect::to('login')->with('message','Successfully Sign Up');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(){
        return view('pages.login');
    }

    public function loginCheck()
    {
        $email = Input::get('email');
        $password = Input::get('password');

        if(Auth::attempt( ['email'=>$email, 'password'=>$password] )  )
        {
            if(Auth::user()->hak_akses=='1'){
                return Redirect::to('/');
            }
            else{
                return Redirect::to('/');
            }
            
        }else
        {
            return Redirect::to('login')->with('invalid','Incorrect E-mail and Password, please try again');
            
        }
        
    }
    
    public function register()
    {
        return view('pages.register');
    }
    
}
