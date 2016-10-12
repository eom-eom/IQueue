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
use App\Region;
use App\Province;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'iqueue'],function(){
	Route::group(['prefix'=>'region'],function(){
		Route::get('/','RegionController@getRegion');

	});

	Route::group(['prefix'=>'province'],function(){
		Route::post('/','ProvinceController@getProvince');
	});

	Route::group(['prefix'=>'municipality'],function(){
		Route::post('/','MunicipalityController@getMunicipality');
	});

	Route::group(['prefix'=>'barangay'],function(){
		Route::post('/','BarangayController@getBarangay');
	});
});
