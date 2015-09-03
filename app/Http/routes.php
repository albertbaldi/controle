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

Route::get('/', function(){
	return redirect()->route('despesa.index');
});

Route::get('categoria', ['as' => 'categoria.index', 'uses' => 'CategoriaController@index']);
Route::get('categoria/create',['as' => 'categoria.create', 'uses' => 'CategoriaController@create']);
Route::post('categoria/store', ['as' => 'categoria.store', 'uses' => 'CategoriaController@store']);
Route::get('categoria/{id}', ['as' => 'categoria.edit', 'uses' => 'CategoriaController@edit']);
Route::post('categoria/{id}', ['as' => 'categoria.update', 'uses' => 'CategoriaController@update']);
Route::get('categoria/destroy/{id}', ['as' => 'categoria.destroy', 'uses' => 'CategoriaController@destroy']);

Route::get('despesa', ['as' => 'despesa.index', 'uses' => 'DespesaController@index']);
Route::get('despesa/create', ['as' => 'despesa.create', 'uses' => 'DespesaController@create']);
Route::post('despesa/create', ['as' => 'despesa.store', 'uses' => 'DespesaController@store']);
Route::get('despesa/{id}', ['as' => 'despesa.edit', 'uses' => 'DespesaController@edit']);
Route::post('despesa/{id}', ['as' => 'despesa.update', 'uses' => 'DespesaController@update']);
Route::get('despesa/destroy/{id}', ['as' => 'despesa.destroy', 'uses' => 'DespesaController@destroy']);

