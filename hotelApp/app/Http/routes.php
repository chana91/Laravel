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

//Route::get('/addHotels', 'WelcomeController@index');
Route::get('/addHotels', array('as'=>'addHotels','uses'=> 'WelcomeController@index'));
Route::get('/', 'WelcomeController@display');

Route::get('/viewHotel',array('as'=>'viewHotel','uses'=> 'WelcomeController@viewHotels'));


Route::get('home', 'HomeController@index');


Route::post('test','WelcomeController@test');
Route::post('searchHotels','WelcomeController@searchHotels');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
