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

Route::get('/', 'WelcomeController@getWelcome');

/*
Route::post('/home', function(){
  return 'Home - POST';
});
*/

Route::group(['middleware' => ['age']], function(){
  Route::get('/dashboard', 'AgeController@getDashboard');

});

Route::get('/restricted', 'AgeController@getRestricted');

Route::controller('tasks', 'TaskController');
