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
		Route::get('/',array('middleware' => 'cors', 'uses' => 'RegionController@getRegion'));
	});

	Route::group(['prefix'=>'province'],function(){
		Route::post('/',array('middleware' => 'cors', 'uses' => 'ProvinceController@getProvince'));
	});

	Route::group(['prefix'=>'municipality'],function(){
		Route::post('/',array('middleware' => 'cors', 'uses' => 'MunicipalityController@getMunicipality'));
	});

	Route::group(['prefix'=>'barangay'],function(){
		Route::post('/',array('middleware' => 'cors', 'uses' => 'BarangayController@getBarangay'));
	});

	Route::group(['prefix'=>'patient'],function(){
		Route::post('/save',array('middleware' => 'cors', 'uses' => 'PatientController@savePatient'));
		Route::post('/ucp',array('middleware' => 'cors', 'uses' => 'PatientController@updateContactOfPatient'));
		Route::post('/uap',array('middleware' => 'cors','uses' => 'PatientController@updateAddressOfPatient'));
		Route::post('/getPatientInfo',array('middleware' => 'cors', 'uses' => 'PatientController@getPatientInfo'));
	});

	Route::group(['prefix'=>'doctor'],function(){
		Route::post('/save',array('middleware' => 'cors','uses' => 'DoctorController@saveDoctor'));
		Route::post('/DHA/save',array('middleware' => 'cors','uses' => 'DoctorHospitalAddressController@saveDoctorHospitalAddress'));
		Route::post('/DoctorScheds/save',array('middleware' => 'cors','uses' => 'DoctorSchedsController@saveDoctorSched'));
		Route::post('/Expertise/save',array('middleware' => 'cors','uses' => 'ExpertiseController@saveExpertise'));
		Route::post('/Specialiazation/save',array('middleware' => 'cors','uses' => 'SpecializationController@saveSpecialization'));
		Route::post('/getDoctortInfo',array('middleware' => 'cors', 'uses' => 'DoctorController@getDoctorInfo'));
	});

	Route::group(['prefix'=>'contacts'],function(){
		Route::post('/save',array('middleware' => 'cors', 'uses' => 'ContactController@saveContact'));
		
	});
	Route::group(['prefix'=>'address'],function(){
		Route::post('/save', array('middleware' => 'cors', 'uses' => 'AddressController@saveAddress'));
		
	});
	Route::group(['prefix'=>'hospital'],function(){	
		Route::post('/save',array('middleware' => 'cors', 'uses' => 'HospitalController@saveHospital'));
		Route::post('/uchd',array('middleware' => 'cors', 'uses' => 'HospitalController@updateContactOfHD'));
		Route::post('/uahd',array('middleware' => 'cors', 'uses' => 'HospitalController@updateAddressOfHD'));
		
	});
	Route::group(['prefix'=>'expertise'],function(){
		Route::post('/save',array('middleware' => 'cors', 'uses' => 'ExpertiseController@saveExpertise'));
	});
	Route::group(['prefix'=>'specialization'],function(){
		Route::post('/save',array('middleware' => 'cors', 'uses' => 'ExpertiseController@saveSpecialization'));
	});
	Route::group(['prefix'=>'users'],function(){
		Route::post('/save',array('middleware' => 'cors', 'uses' => 'UserController@saveUser'));
		Route::post('/signUp',array('middleware' => 'cors', 'uses' => 'UserController@signUp'));
		Route::post('/updateUsername',array('middleware' => 'cors', 'uses' => 'UserController@updateAccountUsername'));
		Route::post('/updatePassword',array('middleware' => 'cors', 'uses' => 'UserController@updateAccountPassword'));
	});
	Route::group(['prefix'=>'queue'],function(){
		Route::post('/save',array('middleware' => 'cors', 'uses' => 'QueueController@saveUser'));
	});

});
