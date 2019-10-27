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

Route::get('/test', 'Api\Test@test');


Route::get('/config', 'Api\Config@all');

//问题相关
Route::get('/q/configs/', 'Api\Question@configs'); //即将弃用 1.0.2版本
Route::get('/q/config/{user_identity}/{version_code}/{language_code}', 'Api\Question@configNew');
Route::get('/q/all', 'Api\Question@all');
Route::get('/q/{questionId}', 'Api\Question@show'); //即将弃用 1.0.2版本
Route::get('/q/{question_list_id}/{user_identity}/{verify}', 'Api\Question@showNew'); 
Route::post('/qs/', 'Api\Question@search'); 
Route::get('q/{question_list_id}/{is_correct}', 'Api\Question@saveMyAnswer');

//用户相关
Route::get('/u/{user_id}', 'Api\User@show');
Route::post('/u/icon/{user_identity}', 'Api\User@uploadIcon');
Route::patch('/u/nickname/{user_identity}', 'Api\User@updateNickname');
Route::patch('/u/email/{user_identity}', 'Api\User@updateEmail');


Route::patch('/e/', 'Api\Explain@update');
Route::post('/e/', 'Api\Explain@store');
Route::delete('/e/{id}/{user_identity}', 'Api\Explain@destory');


//mock
Route::get('/m/{user_identity}', 'Api\Mock@start');
Route::patch('/m/', 'Api\Mock@finished');
Route::get('/ms/{user_identity}', 'Api\Mock@all');  //全球排名结果


//Feedback
Route::post('/f/', 'Api\Feedback@store');  //反馈

Route::get('/imgs/{filename}', function ($filename) {
    $fullPath = base_path().DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR. $filename;

    return response()->stream(function () use ($fullPath) {
        echo file_get_contents($fullPath);
    }, 200, ['Content-Type' => 'image/jpeg']);
});

Route::get('/user_upload/{filename}', function ($filename) {
    $fullPath = base_path().DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'user_upload'.DIRECTORY_SEPARATOR. $filename;

    return response()->stream(function () use ($fullPath) {
        echo file_get_contents($fullPath);
    }, 200, ['Content-Type' => 'image/jpeg']);
});

Route::get('/mi/show', 'Api\Migrate@show');
Route::get('/mi/translate', 'Api\Migrate@translate');



