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
#Home
Route::get('/', 'HomeController@showWelcome');

#Resume Page
Route::get('/resume', 'HomeController@showResume');

#Portfolio Page
Route::get('/portfolio', 'HomeController@showPortfolio');

#Rolldice Game
Route::get('/rolldice/{guess}', 'HomeController@rollDice');

#Authentication
Route::post('/login', 'UsersController@userLogin');
Route::get('/login', 'UsersController@showLogin');
Route::get('/logout', 'UsersController@userLogout');

#Registration
Route::get('/signup', 'UsersController@showSignup');
Route::post('/signup', 'UsersController@userSignup');

#Profile
Route::get('/users/{profile}', 'ProfilesController@showProfile');

#Create Profile Info..
Route::get('/users/{profile}/create', 'ProfilesController@create');

#Save Profile Info
Route::post('/users/{profile}/create', 'ProfilesController@store');

#Edit Profile
Route::get('/users/{profile}/edit', 'ProfilesController@edit');
Route::post('/users/{profile}/update', 'ProfilesController@update');

#Posts
Route::resource('posts', 'PostsController');
