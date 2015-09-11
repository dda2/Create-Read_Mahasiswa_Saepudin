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
/*
* Home
*/
Route::get('/', [
    'uses'  => '\App\Http\Controllers\HomeController@index',
    'as'    => 'home',
    ]);

/*
* Mahasiswa
*/
Route::get('/mahas', [
    'uses'  => '\App\Http\Controllers\MahaController@index',
    'as'    => 'mahas',
    ]);

Route::get('/mahas/tambah', [
    'uses'  => '\App\Http\Controllers\MahaController@getAdd',
    'as'    => 'tambah.mahas',
    ]);

Route::post('/mahas/tambah', [
    'uses'  => '\App\Http\Controllers\MahaController@postAdd',
    'as'    => 'tambah.mahas.post',
    ]);