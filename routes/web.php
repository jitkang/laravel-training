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

Route::get("/car", 'CarController@index');
Route::get("/car/new", 'CarController@create');
Route::post("/car", 'CarController@insert');
Route::get("/car/{car}", 'CarController@view');
Route::get("/car/{car}/edit", 'CarController@edit');
Route::patch("/car/{car}", 'CarController@update');
Route::get("/car/{car}/delete", "CarController@delete");