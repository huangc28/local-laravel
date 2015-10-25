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

Route::get('/invite_friends_template', function(){
	return view('migme.templates.invite_friends_email');
});

Route::get('/invite_friends_template_inline', function(){
	return view('migme.templates.invite_friends_email_inline');
});

Route::get('/invite_friends_template_inline_result', function(){
	return view('migme.templates.invite_friends_email_inline_result');
});
