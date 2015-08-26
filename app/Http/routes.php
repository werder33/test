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


Route::get('/', function () {
    return view('welcome');
});
*/
get('/', ['as' => 'posts', 'uses' => 'PostController@index' ]);
Route ::get('/','BaseController@index');
Route ::get('/index','BaseController@index');
Route ::get('/project','BaseController@project');
Route ::get('/contact','BaseController@contact');
