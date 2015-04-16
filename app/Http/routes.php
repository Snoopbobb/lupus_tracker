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
// Homepage Routes
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

// Calendar Routes
Route::get('calendar/{user_id}', 'CalendarController@index');

// Log Routes
Route::get('calendar/{user_id}/{date}', 'LogController@getData');

// Ajax Routes
Route::post('calendar/{user_id}/{date}/create', 'LogController@createLog');

// Authentication Routes
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
