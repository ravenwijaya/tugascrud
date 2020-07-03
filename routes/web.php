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
Route::get('/pertanyaan','tanyaController@index');
Route::get('/pertanyaan/create','tanyaController@create');
Route::post('/pertanyaan','tanyaController@store');
Route::get('/pertanyaan/{id}','tanyaController@show');
Route::get('/pertanyaan/{id}/edit','tanyaController@edit');
Route::put('/pertanyaan/{id}','tanyaController@update');
Route::delete('/pertanyaan/{id}','tanyaController@delete');
Route::get('/jawaban/{id}','jawabController@index');
Route::post('/jawaban/{id}','jawabController@store');
