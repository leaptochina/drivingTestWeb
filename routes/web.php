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

Route::post('/u/', 'Api\User@store');


Route::get('/config', 'Api\Config@all');

Route::get('/q/configs', 'Api\Question@configs');
Route::get('/q/all', 'Api\Question@all');
Route::get('/q/{questionId}', 'Api\Question@show');
Route::get('/u/{user_id}', 'Api\User@show');


Route::patch('/e/', 'Api\Explain@update');
Route::post('/e/', 'Api\Explain@store');
Route::delete('/e/{id}/{user_identity}', 'Api\Explain@destory');


//mock
Route::get('/m/{user_identity}', 'Api\Mock@start');
Route::patch('/m/', 'Api\Mock@finished');
Route::get('/ms/', 'Api\Mock@all');  //全球排名结果


Route::get('/imgs/{filename}', function ($filename) {
    $fullPath = base_path().DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR. $filename;

    return response()->stream(function () use ($fullPath) {
        echo file_get_contents($fullPath);
    }, 200, ['Content-Type' => 'image/jpeg']);
});


Route::get('/mi/show', 'Api\Migrate@show');
Route::get('/mi/translate', 'Api\Migrate@translate');



