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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [function() {
        return view('main/dashboard');
    }]);
    
    // feature cart
    Route::get('users', [
        'uses' => 'Main\UserController@index'
    ]);
    Route::get('users/feature_cart/add/{code}', [
        'uses' => 'User\FeatureCartController@create'
    ]);
    Route::get('user/feature_cart/remove/{id}', [
        'uses' => 'User\FeatureCartController@remove'
    ]);
    Route::get('user/feature_cart/clear', [
        'uses' => 'User\FeatureCartController@destroy'
    ]);
    Route::get('user/feature_cart/checkout', [
        'uses' => 'User\FeatureCartController@checkout'
    ]);
    Route::get('user/feature_cart/receipt', [
        'uses' => 'User\FeatureCartController@receipt'
    ]);
});