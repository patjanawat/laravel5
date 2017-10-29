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

Route::get('/user','UserController@get');
Route::get('/users','UserController@users');
Route::get('/user/profile','UserController@profile');

// For customer
Route::get('/customer/all','CustomerController@customers');

