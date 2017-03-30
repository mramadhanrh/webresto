<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/belajar', function(){
	//cara 1
	//$nama = 'Ramadhan';
	//return view('helo', compact('nama'));

	//cara 2
	$data['nama'] = 'Ramadhan';
	return view('helo')->with($data);
});
*/

Route::get('/koki', 'KokiController@index');
Route::get('/koki/add', 'KokiController@create');
Route::post('/koki/add', 'KokiController@store');

Route::get('/koki/{id}/edit', 'KokiController@edit');
Route::patch('/koki/{id}/edit', 'KokiController@update');

Route::get('/koki/{id}/destroy', 'KokiController@destroy');
//

Route::get('/kelas', 'KelasController@index');
Route::get('/kelas/add', 'KelasController@create');
Route::post('/kelas/add', 'KelasController@store');

Route::get('/kelas/{id}/edit', 'KelasController@edit');
Route::patch('/kelas/{id}/edit', 'KelasController@update');

Route::get('/kelas/{id}/destroy', 'KelasController@destroy');
