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

Route::get('/', 'PostController@index');

Route::get('/submit', 'PostController@create');

Route::post('/submit', 'PostController@store');

Route::group(['prefix' => 'backend', 'middleware' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/{post}/activate', 'AdminController@activatePost');
    Route::get('/{post}/deactivate', 'AdminController@deactivatePost');
});

Route::get('/{activepost}', 'PostController@show');

