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

Auth::routes();

Route::get('/home', 'User\HomeController@index')->name('home');
Route::get('/user/logout', 'User\Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){

	Route::get('/login', 'Admin\Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Admin\Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Admin\Auth\AdminLoginController@logout')->name('admin.logout');
	
});


