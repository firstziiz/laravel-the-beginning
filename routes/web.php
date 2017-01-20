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

Route::get('/', 'EventController@index');

Route::get('/create', 'EventController@create');
Route::post('/createEvent', 'EventController@createEvent');

Route::get('/{eid}', 'EventController@event');
Route::post('/{eid}/join', 'EventController@join');