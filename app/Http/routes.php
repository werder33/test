<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|*/





Route:: group(['middleware' =>'auth'], function(){
                Route::controllers(['/cabinet' => 'CabinetController']);
} );


Route::controllers(['project'=>'ProjectController',
                    'page'=>'PageController',
                    'test'=>'MainController',
                    'auth'=>'Auth\AuthController']);
Route::get('/news','BaseController@getNews');
Route::get('/{id}', 'BaseController@getStatic');
Route::get('/','BaseController@getIndex');