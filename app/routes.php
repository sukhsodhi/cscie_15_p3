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
Route::get('/users/{no_of_users?}', function($no_of_users='5')
{
	$userHelper = new UserHelper();

	# If there no of users is passed in the query string
	if(Input::get('no_of_users')) {
		$no_of_users = Input::get('no_of_users');
	}
	


	$users = $userHelper->get_users($no_of_users);
	return View::make('users')->with('no_of_users', $no_of_users)
			->with('users', $users);
});


//use fillertest view for fillertext
Route::get('/fillertext/{no_of_paras?}', function($no_of_paras='3')
{
	
	$paraHelper = new ParaHelper();

	# If there no of users is passed in the query string
	if(Input::get('no_of_paras')) {
		$no_of_paras = Input::get('no_of_paras');
	}
	


	$paras = $paraHelper->get_pargraphs($no_of_paras);
	return View::make('fillertext')->with('no_of_paras', $no_of_paras)
			->with('paras', $paras);


});

//mapping xckd view for xckd
Route::get('/xkcd', function()
{
	return View::make('xkcd');
});
