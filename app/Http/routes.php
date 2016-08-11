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
*/

Route::auth();

Route::get('/', 'IndexController@index');
Route::get('/projects', 'ProjectController@index');
Route::get('/projects/{id}', 'ProjectController@detail');

Route::get('/news', function () {
    return view('news.list');
});

Route::get('/news/{id}', function () {

    return view('news.detail');
});

/*Route::get('/portfolio', function () {
    return view('portfolio.list');
});*/