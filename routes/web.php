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
    return view('welcome');
});

Route::get('doctors/edit/{id}', 'DoctorController@edit');

Route::post('doctors/edit/', 'DoctorController@editStore');

Route::get('doctors/create', 'DoctorController@create');

Route::post('doctors/', 'DoctorController@store');

Route::get('doctors/', 'DoctorController@index');

Route::get('doctors/specializations/{id}', 'DoctorController@listBySpecialization');

Route::get('doctors/delete/{id}', 'DoctorController@delete');

Route::get('doctors/{id}', 'DoctorController@show');

Route::get('patients/', 'PatientController@index');

Route::get('patients/{id}', 'PatientController@show');


Route::get('specializations/', 'SpecializationController@index');

Route::get('specializations/create', 'SpecializationController@create');

Route::post('specializations/', 'SpecializationController@store');

Route::get('visits/', 'VisitController@index');

Route::get('visits/create', 'VisitController@create');

Route::post('visits/', 'VisitController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
