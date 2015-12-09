<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('tes',function(){
	echo " tes";
});

Route::get('home',['middleware'=>'auth',function(){
	
		echo 'welcome home '.Auth::user()->username.'.';
}]);

Route::get('admin',['middleware'=>'admin',function(){

	echo "admin page ".Auth::user()->name.'.';

}]);

Route::get('admin2',['middleware'=>'admin2',function(){

	echo "admin page 2 ".Auth::user()->name.'.';

}]);




Route::get('user/{id}',['middleware'=>'admin',function($id){
	if(Auth::guest()){
		return Redirect::to('auth/login');
	}else

	{
		$user=App\User::find($id);
		echo 'The user with ID of '.$id.'has email of : '.$user->email;	
	}
}]);



// Route::get('tutor', ['middleware'=>'admin',function(){
// 	if(Auth::guest()){
// 		return view('loginStaff');
// 	}
// }]);


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('home','pagescontroller@home');
Route::get('register', 'pagescontroller@register');
Route::get('news', 'pagescontroller@news');
Route::get('member/{id}', 'pagescontroller@member');
Route::get('login', 'pagescontroller@login');
Route::get('tutor', 'pagescontroller@tutor');
Route::get('staff', 'pagescontroller@staff');
Route::get('report', 'pagescontroller@report');
Route::get('member', 'pagescontroller@member');
Route::get('pay', 'pagescontroller@pay');
Route::get('about', 'pagescontroller@about');
Route::get('contact', 'pagescontroller@contact');
Route::get('staff', 'pagescontroller@loginStaff');
Route::get('tutor', 'pagescontroller@loginTutor');
Route::get('loginStaff', 'pagescontroller@loginStaff');
Route::get('loginTutor', 'pagescontroller@loginTutor');
// Route::post('auth/register', function(){
	
// 	echo " tes register";
// });

Route::get('api/news/', 'NewsController@apiIndex');

Route::resource('news','NewsController');
Route::resource('activity', 'ActivityController');

Route::get('register_participant','ParticipantController@index');

Route::post('register_participant','ParticipantController@store');



