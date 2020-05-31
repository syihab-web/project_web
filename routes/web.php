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
    return view('auth.login');
});
Route::get('/pandemic', function(){
    return view('pandemic');
});
Route::get('/defend', function(){
    return view('avoid');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

//Country
//Route::get('/country', 'CountryController@index');
//Route::get('/country/create', 'CountryController@create');
//Route::post('/country', 'CountryController@store');
//Route::delete('/{country}', 'CountryController@destroy');
//Route::get('/{country}/edit', 'CountryController@edit');
//Route::patch('/country/{country}', 'CountryController@update');
Route::resource('country', 'CountryController');
Route::get('/search', 'CountryController@search');

//User Benua
Route::get('/infected', 'InfectedController@index');
Route::get('/searchEurope', 'InfectedController@searchEurope');
Route::get('/searchAmerica', 'InfectedController@searchAmerica');
Route::get('/searchAfrica', 'InfectedController@searchAfrica');
Route::get('/searchAsia', 'InfectedController@searchAsia');

