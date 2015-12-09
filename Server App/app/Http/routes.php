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


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Kaderisasi App
Route::get('/', function(){
	return redirect('kader');
});
Route::get('kader', 'KaderController@index');

Route::group(['prefix' => 'kader'], function() {
	Route::get('biodata', 'KaderController@biodata');
	Route::post('biodata', 'KaderController@update_biodata');

	Route::get('kegiatan', 'KaderController@kegiatan');
	Route::get('kegiatan/tambah', 'KaderController@tambah_kegiatan');
	Route::post('kegiatan/tambah', 'KaderController@store_kegiatan');
	Route::get('kegiatan/edit/{id}', 'KaderController@edit_kegiatan');
	Route::post('kegiatan/edit/{id}', 'KaderController@update_kegiatan');
	Route::get('kegiatan/hapus/{id}', 'KaderController@hapus_kegiatan');
	Route::delete('kegiatan/hapus/{id}', 'KaderController@destroy_kegiatan');

	Route::get('prestasi', 'KaderController@prestasi');
	Route::get('prestasi/tambah', 'KaderController@tambah_prestasi');
	Route::post('prestasi/tambah', 'KaderController@store_prestasi');
	Route::get('prestasi/edit/{id}', 'KaderController@edit_prestasi');
	Route::post('prestasi/edit/{id}', 'KaderController@update_prestasi');
	Route::get('prestasi/hapus/{id}', 'KaderController@hapus_prestasi');
	Route::delete('prestasi/hapus/{id}', 'KaderController@destroy_prestasi');

	Route::get('artikel', 'KaderController@artikel');
	Route::get('artikel/tambah', 'KaderController@tambah_artikel');
	Route::post('artikel/tambah', 'KaderController@store_artikel');
	Route::get('artikel/edit/{id}', 'KaderController@edit_artikel');
	Route::post('artikel/edit/{id}', 'KaderController@update_artikel');
	Route::get('artikel/hapus/{id}', 'KaderController@hapus_artikel');
	Route::delete('artikel/hapus/{id}', 'KaderController@destroy_artikel');
	Route::get('artikel/lihat/{id}', 'KaderController@lihat_artikel');
});

// Admin page
Route::group(['prefix' => 'admin'], function(){
	Route::get('kegiatan', 'AdminController@kegiatan');
	Route::get('prestasi', 'AdminController@prestasi');
	Route::get('artikel', 'AdminController@artikel');
	Route::get('kader', 'AdminController@kader');
	Route::get('kader/ubah_hak_akses/{id}', 'AdminController@update_kader');
	Route::get('kader/hapus/{id}', 'AdminController@hapus_kader');
	Route::delete('kader/hapus/{id}', 'AdminController@destroy_kader');
});


// API
Route::group(['prefix' => 'api'], function(){
	Route::get('kegiatan', 'KegiatanAPIController@index');
	Route::post('kegiatan', 'KegiatanAPIController@store');
});