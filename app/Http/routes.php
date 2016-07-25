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

/*
Route::post('/home', function(){
  return 'Home - POST';
});
*/
Route::get('/dashboard', ['middleware' => 'age', function(){
  return 'This is the dashboard';
}]);

Route::get('/restricted', function(){
  return 'You are not allowed here';
});

Route::controller('tasks', 'TaskController');
