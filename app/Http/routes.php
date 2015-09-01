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

Route::get('/', 'CategoriaController@index');
Route::get('categoria/create', 'CategoriaController@create');
Route::post('categoria/store', ['as' => 'categoria.store', 'uses' => 'CategoriaController@store']);
