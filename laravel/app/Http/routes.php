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
    $users = User::orderBy('created_at', 'asc')->get();
    
    $occupations = [
        '' => '(Select one)',
        'student' => 'Student',
        'medic' => 'Medic',
        'driver' => 'Driver',
        'developer' => 'Software Developer'
    ];
    
    return view('users', [
        'users' => $users,
        'occupations' => $occupations
    ]);
});

/**
 * Add New User
 */
Route::resource('user', 'UserController');

/**
 * Delete User
 */

Route::delete('/user/{user}', function (User $user) {
    $user->delete();
    
    return redirect('/');
});