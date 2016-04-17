<?php

use App\User;

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

/**
 * Show User Dashboard
 */
Route::get('/', function () {
    return redirect('/user');
});

/**
 * Add New User
 */
Route::resource('user', 'UserController');