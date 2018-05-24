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

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/reg', 'Auth\RegisterController@showRegistrationForm');
Route::get('/reg_success', 'Auth\RegisterController@registrationSuccessful');
Route::post('/reg', 'Auth\RegisterController@register');
Route::get('/', 'WallController@index');
Route::post('/', 'WallController@store');
