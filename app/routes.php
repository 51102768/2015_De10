<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@showWelcome');

Route::get('login', 'LoginController@index');

Route::post('login','LoginController@login');

Route::get('register', 'RegisterController@index');

Route::post('register','RegisterController@store');

Route::get('logout', array('as' => 'logout', function () { 
	Auth::logout();

	return Redirect::to('/')->with('message', 'Bạn đã đăng xuất thành công');
 }));

Route::get('profile', 'ProfileController@indexProfile');

Route::post('image-submit','ProfileController@postProfile');

Route::get('editprofile','ProfileController@indexEditProfile');

Route::post('editprofile','ProfileController@postEditProfile');

Route::get('manager','ManagerController@index');

Route::get('message','MessageController@index');

Route::post('message','MessageController@store');

Route::post('message_checked','MessageController@delete');

Route::get('customer','CustomerController@index');