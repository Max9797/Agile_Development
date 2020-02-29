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

Route::get('/','PropertiesController@display');


Route::get('test', function () {
    return view('test');
});

Auth::routes();

Route::get('/property','PropertyController@index');

Route::post('/addproperty','PropertyController@store')->name('addimage');

Route::get('/propertiespage','PropertyController@display');

Route::get('/editproperty/{id}','PropertyController@edit');

Route::put('/updatepropertydetails/{id}','PropertyController@update');

Route::get('/deleteproperty/{id}','PropertyController@delete');

Route::get('/viewproperty/{id}','PropertyController@displayProperty');

Auth::routes();


Route::get('/home', 'PropertiesController@displayHome')->name('home');

Route::get('/search-prop/{city}/{price}/{gender}','PropertiesController@search');

Auth::routes();

