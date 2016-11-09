<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'StandardController@getIndex');
Route::get('users', 'UserController@getIndex');
Route::get('disclaimer', 'StandardController@getDisclaimer');
Route::get('contact', 'StandardController@getContact');
Route::get('resultaten', 'PropertiesController@getIndex');
