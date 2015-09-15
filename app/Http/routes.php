<?php


/*|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|*/
// Home

Route::get('/', [
    'uses'  => '\App\Http\Controllers\HomeController@index',
    'as'    => 'home',
    ]);

// Mahasiswa

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

Route::get('/masuk', [
    'uses'  => '\App\Http\Controllers\AuthController@getSignin',
    'as'    => 'signin',
    'middleware' => ['guest']
]);

Route::post('/masuk', [
    'uses'  => '\App\Http\Controllers\AuthController@postSignin',
    'as'    => 'signin.post'
]);

// Auth

Route::get('/daftar', [
    'uses'  => '\App\Http\Controllers\AuthController@getSignup',
    'as'    => 'signup',
    'middleware' => ['guest']
]);

Route::post('/daftar', [
    'uses'  => '\App\Http\Controllers\AuthController@postSignup',
]);

Route::get('/keluar', [
    'uses'  => '\App\Http\Controllers\AuthController@getSignout',
    'as'    => 'signout',
]);

// Gambar Profil
Route::get('/profil', [
    'uses'  => '\App\Http\Controllers\ProfilController@getProfil',
    'as'    => 'profil.image',
    'middleware' => ['auth']
]);

Route::post('/profil', [
    'uses'  => '\App\Http\Controllers\ProfilController@postAddImage',
    'as'    => 'profil.image.post',
]);