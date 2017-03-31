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
    return view('landing');
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

Route::get('/makanan', 'MakananController@index');
Route::get('/makanan/add', 'MakananController@create');
Route::post('/makanan/add', 'MakananController@store');

Route::get('/makanan/{id}/edit', 'MakananController@edit');
Route::patch('/makanan/{id}/edit', 'MakananController@update');

Route::get('/makanan/{id}/destroy', 'MakananController@destroy');

//

Route::get('/minuman', 'MinumanController@index');
Route::get('/minuman/add', 'MinumanController@create');
Route::post('/minuman/add', 'MinumanController@store');

Route::get('/minuman/{id}/edit', 'MinumanController@edit');
Route::patch('/minuman/{id}/edit', 'MinumanController@update');

Route::get('/minuman/{id}/destroy', 'MinumanController@destroy');


//

Auth::routes();

Route::get('/home', 'HomeController@index');
