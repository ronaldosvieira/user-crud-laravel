<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        '' => '',
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
Route::post('/user', function (Request $request) {
    $validator = validator::make($request->all(), [
        'name' => 'required|max:255',
        'email' => 'required',
        'birthday' => 'required|date_format:Y-m-d',
        'occupation' => 'required'
    ]);
    
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    
    $user = new User;
    
    $user->name = $request->name;
    $user->email = $request->email;
    $user->birthday = $request->birthday;
    $user->occupation = $request->occupation;
    $user->notes = $request->notes;
    
    $user->save();
    
    return redirect('/');
});

/**
 * Delete User
 */

Route::delete('/user/{user}', function (User $user) {
    $user->delete();
    
    return redirect('/');
});