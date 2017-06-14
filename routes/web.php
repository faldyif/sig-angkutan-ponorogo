<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'BerandaController@index');
Route::get('/info-sekolah', 'InfoSekolahController@index');
Route::get('/info-trayek', 'InfoTrayekController@index');
Route::get('/info-pengemudi', 'InfoPengemudiController@index');
Route::get('/info-titik-keberangkatan', 'InfoTitikKeberangkatan@index');
Route::get('/peta', 'DetailPetaController@index');
Route::get('/tentang', function () {
    return view('kontak');
});
Route::group(['middleware' => ['auth']], function () {\
	Route::group(['prefix' => 'admin'], function () {
	    Route::get('/', function () {
	    	return view('admin.dashboard');
	    });
		Route::resource('route', 'AdminTrayekController');
		Route::resource('driver', 'AdminPengemudiController');
		Route::resource('school', 'AdminSekolahController');
		Route::resource('departure', 'AdminTitikKeberangkatanController');
	});
});