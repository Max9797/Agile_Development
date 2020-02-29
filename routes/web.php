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

<<<<<<< HEAD
Route::get('/','PropertiesController@display');

=======
>>>>>>> b3bc68724e90acad2e36947ae50ab4917c87c3e2
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::get('/home', 'PropertiesController@displayHome')->name('home');

Route::get('/search-prop/{city}/{price}/{gender}','PropertiesController@search');

// Route::get('full-text-search', 'Full_text_search_Controller@index');

// Route::post('full-text-search/action', 'Full_text_search_Controller@action')->name('full-text-search.action');

// Route::get('full-text-search/normal-search', 'Full_text_search_Controller@normal_search')->name('full-text-search.normal-search');
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> b3bc68724e90acad2e36947ae50ab4917c87c3e2
