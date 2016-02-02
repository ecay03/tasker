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

Route::get('/', ['as' => '/', function () {
	return View::make('index');
}]);

Route::post('/', ['as' => 'tasklist', function () {
	return View::make('index');
}]);

Route::get('login', ['as' => 'login', function(){
	return View::make('login');
}]);


Route::post('login', ['as' => 'login', function(){

if(Auth::attempt(Input::only('name', 'password'))) {
	return Redirect::intended('/');
} else {
	return Redirect::back()
	->withInput()
	->with('error', "Invalid credentials");
}
}]);

Route::get('logout', ['as' => 'logout',function(){
Auth::logout();
return Redirect::to('/')
->with('message', 'You are now logged out');
}]);	

Route::get('/{task}/edit', function(task $task) {
return "task #$task";
});

Route::get('/{task}/delete', function(Cat $task) {
return "task #$task";
});