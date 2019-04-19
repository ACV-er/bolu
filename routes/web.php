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
Route::group(['middleware' => 'cookie'], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/bl', function () {
        return view('bolu');
    });
    Route::get('/bl_product', function () {
        return view('bl_product');
    });
    Route::get('/bl_EnterpriseDynamics', function () {
        return view('bl_EnterpriseDynamics');
    });
    Route::get('/bl_contact', function () {
        return view('bl_contact');
    });
    Route::get('/article/{id}', function (Illuminate\Http\Request $request) {
        return view('article', ['id' => $request->route('id')]);
    })->where(['id' => '[0-9]+']);

    Route::get('/posts/{type}/{page}', "PostController@getPostList")->where(['id' => '[0-9]+', 'type' => '[0-9]+']);

    Route::put('/post', "PostController@submitPost");
    Route::post('/post/{id}', "PostController@updatePost")->where(['id' => '[0-9]+']);
    Route::delete('/post/{id}', "PostController@delPost")->where(['id' => '[0-9]+']);
});
