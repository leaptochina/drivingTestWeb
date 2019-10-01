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


Route::get('/config', 'Api\Config@all');

Route::get('/q/all', 'Api\Question@all');
Route::get('/q/{questionId}', 'Api\Question@show');

Route::get('/mi', 'Api\Migrate@show');
