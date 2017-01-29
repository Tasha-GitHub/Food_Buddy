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

Route::resource('users', 'UsersController');

Route::resource('users.snippets', 'UserSnippetsController');

Route::resource('users.meals', 'UserMealsController');

Route::resource('users.food', 'UserFoodController');

Route::auth();

Route::get('/home', 'HomeController@index');
