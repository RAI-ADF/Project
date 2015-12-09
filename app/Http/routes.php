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

Route::get('/', 'PagesController@home');
Route::get('/userpage', 'UserPageController@index');
Route::get('result', 'PagesController@result');
Route::get('contact', 'PagesController@contact');
Route::get('create', 'PagesController@create');
Route::get('/contact', 'QuestionsController@create');
Route::post('create', 'QuestionsController@store');
Route::get('questions', 'QuestionsController@index');
Route::get('/questions/{slug?}', 'QuestionsController@show');
Route::get('/results/{slug?}', 'ResultsController@show');
//Route::get('/results/{slug?}', 'ResultsController@getOption');
Route::get('/questions/{slug?}/edit','QuestionsController@edit');
Route::post('/questions/{slug?}/edit','QuestionsController@update');
Route::post('/questions/{slug?}/delete','QuestionsController@destroy');
Route::group(['prefix'=>'api/v1'],function(){
	Route:resource('/questions','QuestionsAPIController@index');
	//Route:resource('/questions','QuestionsAPIController@store');
	
});
Route::group(['prefix'=>'api/v1'],function(){
	//Route:resource('/questions','QuestionsAPIController@index');
	Route:resource('/results','QuestionsAPIController@store');
	
});
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('users/logout', 'Auth\AuthController@getLogout');
Route::get('users/register', 'Auth\AuthController@getRegister');
Route::post('users/register', 'Auth\AuthController@postRegister');

