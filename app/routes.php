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

//Changed the default view to welcome
Route::get('/', function()
{
	return View::make('welcome');
});


//use users view for users
Route::get('/users', function()
{
	return View::make('users');
});


//use fillertest view for fillertext
Route::get('/fillertext', function()
{
	return View::make('fillertext');
});

//mapping xckd view for xckd
Route::get('/xckd', function()
{
	return View::make('xckd');
});
