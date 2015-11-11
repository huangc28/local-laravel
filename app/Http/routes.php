<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile_settings_account', function(){
	return view('migme.profile_settings_account');
});

Route::get('/profile_setting_privacy', function(){
	return view('migme.profile_settings_privacy');
});

Route::get('/profile_setting_security', function(){
	return view('migme.profile_settings_security');
});