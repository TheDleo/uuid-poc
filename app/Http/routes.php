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

Route::resource('dans', 'DanController');
Route::any('dans/create', 'DanController@create');
Route::post('dans/create', 'DanController@store');
Route::post('dans/store', 'DanController@store');
