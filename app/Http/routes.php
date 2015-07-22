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

Route::get('/', 'PagesController@getIndex');

Route::group(['prefix' => 'pages'], function(){
    Route::get('index', 'PagesController@getIndex');
    Route::get('flot', 'PagesController@getFlot');
    Route::get('morris', 'PagesController@getMorris');
    Route::get('tables', 'PagesController@getTables');
    Route::get('forms', 'PagesController@getForms');
    Route::get('panels-wells', 'PagesController@getPanelsWells');
    Route::get('buttons', 'PagesController@getButtons');
    Route::get('notifications', 'PagesController@getNotifications');
    Route::get('typography', 'PagesController@getTypography');
    Route::get('icons', 'PagesController@getIcons');
    Route::get('grid', 'PagesController@getGrid');
    Route::get('blank', 'PagesController@getBlank');
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@authenticate');
    Route::get('logout', 'Auth\AuthController@getLogout');
});
