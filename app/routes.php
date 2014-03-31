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

Route::get('/', function()
{
	return View::make('hello');
});


//Route::controller('users', 'UserController');
Route::resource('users', 'UserController');
// Route::get('users', function()
// {
//     return View::make('users/index');
// });


Route::get('login', array('uses' => 'SessionController@getLogin', 'as' => 'login'));
Route::get('logout', array('uses' => 'SessionController@getLogout', 'as' => 'logout'));

Route::post('login', array('uses' => 'SessionController@postLogin'));