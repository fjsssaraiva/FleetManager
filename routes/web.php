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

Route::get('/', function () {
    //return view('welcome');
	return redirect()->route('authors.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('authors', 'AuthorsController');
    Route::resource('vehiclemodels', 'VehicleModelsController');
});

