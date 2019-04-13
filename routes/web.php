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
use \Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/bl', function () {
    return view('bolu');
});

Route::get('/posts/{type}/{page}', "PostController@getPostList")->where(['id' => '[0-9]+', 'type' => '[0-9]+']);

Route::put('/post', "PostController@submitPost");
Route::post('/post/{id}', "PostController@updatePost")->where(['id' => '[0-9]+']);
Route::delete('/post/{id}', "PostController@delPost")->where(['id' => '[0-9]+']);
