<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/owner', 'Auth\LoginController@showOwnerLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/owner', 'Auth\RegisterController@showOwnerRegisterForm');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/owner', 'Auth\LoginController@ownerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/owner', 'Auth\RegisterController@createOwner');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/owner', 'owner');