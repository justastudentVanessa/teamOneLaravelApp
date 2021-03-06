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


//Route::controller('/', 'HomeController');



Route::get('/', function () {	
return view('welcome');
});



Route::group(['middleware'=> 'web'], function(){
Route::auth();
});

Route::group(['middleware'=> 'admin'], function(){
Route::resource('/user', 'UserController');
Route::resource('/CourseTable', 'CourseController');
Route::resource('/CourseDetails', 'CourseDetailsController');
});

Route::controller('/home', 'HomeController');
Route::get('/home', 'HomeController@index');


