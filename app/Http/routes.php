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
        $data = array(
            'page' => 'DASHBOARD',
            'subpage' => 'DASHBOARD'
        );
        return view('main/dashboard', $data);
    }]);
    
    // User
    Route::get('users', [
        'uses' => 'Main\UserController@index'
    ]);
    Route::get('users/add', [
        'uses' => 'Main\UserController@create'
    ]);
    Route::post('users/add', [
        'uses' => 'Main\UserController@store'
    ]);
    Route::get('users/edit/{id}', [
        'uses' => 'Main\UserController@edit'
    ]);
    Route::post('users/edit/{id}', [
        'uses' => 'Main\UserController@update'
    ]);
    Route::get('users/delete/{id}', [
        'uses' => 'Main\UserController@destroy'
    ]);
    Route::get('users/test', [
        'uses' => 'Main\UserController@test'
    ]);
    
    // Role
    Route::get('roles', [
        'uses' => 'Main\RoleController@index'
    ]);
    Route::get('roles/add', [
        'uses' => 'Main\RoleController@create'
    ]);
    Route::post('roles/add', [
        'uses' => 'Main\RoleController@store'
    ]);
    Route::get('roles/edit/{id}', [
        'uses' => 'Main\RoleController@edit'
    ]);
    Route::post('roles/edit/{id}', [
        'uses' => 'Main\RoleController@update'
    ]);
    Route::get('roles/delete/{id}', [
        'uses' => 'Main\RoleController@destroy'
    ]);
    Route::get('roles/test', [
        'uses' => 'Main\RoleController@test'
    ]);
});