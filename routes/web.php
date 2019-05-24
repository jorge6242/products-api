<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::get('/product', 'ProductController@index');
    Route::get('/product/{id}', 'ProductController@show');
    Route::put('/product/{id}', 'ProductController@update');
    Route::delete('/product/{id}', 'ProductController@destroy');
    Route::post('/product', 'ProductController@store');
});
