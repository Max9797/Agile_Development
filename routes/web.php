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

Route::get('test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/property','PropertyController@index');

Route::post('/addproperty','PropertyController@store')->name('addimage');

Route::get('/propertiespage','PropertyController@display');

Route::get('/editproperty/{id}','PropertyController@edit');

Route::put('/updatepropertydetails/{id}','PropertyController@update');

Route::get('/deleteproperty/{id}','PropertyController@delete');

Route::get('/viewproperty/{id}','PropertyController@displayProperty');