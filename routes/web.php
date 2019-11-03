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


//配置相关
Route::get('/config', 'Api\Config@all');
Route::post('/config', 'Api\Config@config'); 
Route::get('/q/config/{user_identity}/{version_code}/{language_code}', 'Api\Question@configNew');    //1.0.5（不含）以前弃用


//问题相关
Route::get('/q/all', 'Api\Question@all');
Route::get('/q/{question_list_id}/{user_identity}/{verify}', 'Api\Question@showNew'); 
Route::post('/qs/', 'Api\Question@search'); 
Route::get('q/{question_list_id}/{is_correct}', 'Api\Question@saveMyAnswer');

//金币相关
Route::get('/c/signin/{user_identity}', 'Api\Coin@signin');
Route::get('/c/enable_prone/{user_identity}', 'Api\Coin@enableProne');
Route::get('/c/earn_coin/{user_identity}/{time}/{check_sum}', 'Api\Coin@earnCoin');
Route::post('/c/purchase_coin/{user_identity}', 'Api\Coin@purchaseCoin');
Route::get('/c/enable_expend/{user_identity}', 'Api\Coin@enableExpend');

//用户相关
Route::get('/u/{user_id}', 'Api\User@show');
Route::post('/u/icon/{user_identity}', 'Api\User@uploadIcon');
Route::patch('/u/nickname/{user_identity}', 'Api\User@updateNickname');
Route::patch('/u/email/{user_identity}', 'Api\User@updateEmail');
Route::post('/u/upload_question/{user_identity}', 'Api\User@uploadQuestion');

//问题解释相关
Route::patch('/e/', 'Api\Explain@update');
Route::post('/e/', 'Api\Explain@store');
Route::delete('/e/{id}/{user_identity}', 'Api\Explain@destory');


//mock
Route::get('/m/{user_identity}', 'Api\Mock@start');
Route::patch('/m/', 'Api\Mock@finished');
Route::get('/ms/{user_identity}', 'Api\Mock@all');  //全球排名结果


//Feedback
Route::post('/f/', 'Api\Feedback@store');  //反馈

//Pravacy
Route::get('/pravacy/', 'Api\Pravacy@show');  //反馈

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

Route::get('/question_img/{filename}', function ($filename) {
    $fullPath = base_path().DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'question_img'.DIRECTORY_SEPARATOR. $filename;

    return response()->stream(function () use ($fullPath) {
        echo file_get_contents($fullPath);
    }, 200, ['Content-Type' => 'image/jpeg']);
});

Route::get('/mi/show', 'Api\Migrate@show');
Route::get('/mi/translate', 'Api\Migrate@translate');
Route::get('/mi/translateNew', 'Api\Migrate@translateNew');







// Route::get('/q/configs/', 'Api\Question@configs'); //即将弃用 1.0.2版本
// Route::get('/q/{questionId}', 'Api\Question@show'); //即将弃用 1.0.2版本