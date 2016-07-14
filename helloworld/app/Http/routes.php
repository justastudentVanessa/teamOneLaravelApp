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

//Route::GET{'/', '

Route::group(['middleware'=> 'web'], function(){
Route::auth();
});

Route::group(['middleware'=> 'admin'], function(){
Route::resource('/user', 'UserController');
<<<<<<< HEAD
Route::resource('/CourseTable', 'GolfCourseController');
=======
>>>>>>> 8961686d5ade26a78a020853831eb410f50a7425
});
Route::resource('/CreateCourse','GolfCourseController');

Route::controller('/home', 'HomeController');
Route::get('/home', 'HomeController@index');


