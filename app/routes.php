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

require_once "Collection.php";

/*Home page*/
Route::get('/', function(){
	return Redirect::to('reviews');
});

/*Home page*/
Route::get('reviews', 'TestingsController@displayReviews');

/*adding new testing*/
Route::post('testings/add', 'TestingsController@add');

/*Enums page*/
Route::get('/enums', 'EnumsController@displayEnums');




