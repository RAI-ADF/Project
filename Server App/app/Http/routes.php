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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('login','lelangController@login');
Route::post('login','lelangController@loginCheck');
Route::get('register','lelangController@register');
Route::post('register/save','lelangController@store');
Route::resource('item', 'ItemController');

Route::resource('item', 'ItemController');
Route::resource('bid', 'BidController');
Route::get('item/edit/{item_id}','ItemController@edit');
Route::post('item/editUpdate','ItemController@editUpdate');

Route::get('/', function(){ 
    if(Auth::user()){
        return view('index');
    }else{
        return Redirect::to('login');
    }
});

//Route::get('item', function(){ 
//    if(Auth::user()){
//        return Redirect::to('/item');
//    }else{
//        return Redirect::to('login');
//    }
//});
//
//Route::get('bid', function(){ 
//    if(Auth::user()){
//        return Redirect::to('/bid');
//    }else{
//        return Redirect::to('login');
//    }
//});

Route::get('/logout', function(){ 
    Auth::logout();
    return Redirect::to('login');
});