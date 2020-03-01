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

Auth::routes();


Route::get('/ownerhome', 'PropertiesController@displayHome');

Route::get('/search-prop/{city}/{price}/{gender}','PropertiesController@search');

Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/owner', 'OwnerController@index')->name('owner')->middleware('owner');
Route::get('/student', 'StudentController@index')->name('student')->middleware('student');

