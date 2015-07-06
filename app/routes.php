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

/*Home page*/
Route::get('/', function()
{
	return View::make('reviews');
});

/*adding new testing*/
Route::post('testings/add', function()
{
	$testing = new DeviceTesting;
	$testing->transportations_num = 4;
	$testing->save();
	return View::make('hello');
});


