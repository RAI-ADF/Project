<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PagesController extends Controller
{




    public function home(){
        return view('home');        // view page '/resources/views/home.php'
    }    

    public function register(){
        return view('register');        // view page '/resources/views/register.php'
    }

    public function news(){
        return view('news');        // view page '/resources/views/news.php'
    }

    public function login(){
        return view('login');        // view page '/resources/views/login.php'
    }    

    public function tutor(){
        return view('tutor');        // view page '/resources/views/register.php'
    }   

    public function staff(){
        return view('staff');        // view page '/resources/views/register.php'
    }   

    public function report(){
        return view('report');        // view page '/resources/views/register.php'

    } 

    public function logout(){
        return view('logout');
    }  

    public function member($id){
      //  $Participant = Participant::findOrFail($id);
        //return view('students.index', compact('students'));
        $user = DB::table('participants')->where('nim', $id)->first();

        return view('member', compact('user'));        // view page '/resources/views/register.php'
    } 

    public function pay(){
        return view('pay');        // view page '/resources/views/register.php'
    } 

    public function about(){
        return view('about');        // view page '/resources/views/register.php'
    }   

    public function contact(){
        return view('contact');        // view page '/resources/views/register.php'
    }   

    public function loginStaff(){
        return view('loginStaff');
    }
    public function loginTutor(){
        return view('loginTutor');
    }
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
    public function store(Request $request)
    {
        //
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
}
