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

Route::group(['prefix' => '', 'namespace' => 'Frontend'], function () {
    Route::get('/', ['as' => 'frontend.index', 'uses' => 'HomeController@index']);

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/application', ['as' => 'frontend.application.input', 'uses' => 'ApplicationController@getInput']);
    Route::post('/application', ['as' => 'frontend.application.input', 'uses' => 'ApplicationController@postInput']);
    Route::get('/application/confirm', ['as' => 'frontend.application.confirm', 'uses' => 'ApplicationController@getConfirm']);
    Route::get('/application/complete', ['as' => 'frontend.application.complete', 'uses' => 'ApplicationController@getComplete']);

    /*
    |--------------------------------------------------------------------------
    | Contact Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/contact', ['as' => 'frontend.contact.input', 'uses' => 'ContactController@getInput']);
    Route::post('/contact', ['as' => 'frontend.contact.input', 'uses' => 'ContactController@postInput']);
    Route::get('/contact/confirm', ['as' => 'frontend.contact.confirm', 'uses' => 'ContactController@getConfirm']);
    Route::get('/contact/complete', ['as' => 'frontend.contact.complete', 'uses' => 'ContactController@getComplete']);

    /*
    |--------------------------------------------------------------------------
    | Price Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/price', ['as' => 'frontend.price.index', 'uses' => 'PriceController@index']);


});
