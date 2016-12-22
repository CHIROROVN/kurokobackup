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

    // contact
    Route::get('/contact', ['as' => 'frontend.contact.index', 'uses' => 'ContactController@getIndex']);
    Route::post('/contact', ['as' => 'frontend.contact.index', 'uses' => 'ContactController@postIndex']);
    Route::get('/contact/confirm', ['as' => 'frontend.contact.confirm', 'uses' => 'ContactController@getConfirm']);
    Route::get('/contact/send', ['as' => 'frontend.contact.send', 'uses' => 'ContactController@getSend']);
    Route::get('/contact/back', ['as' => 'frontend.contact.back', 'uses' => 'ContactController@getBack']);


});
