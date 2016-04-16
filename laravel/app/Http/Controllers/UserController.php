<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function create(Request $request) {
        $validator = validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
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
    }
}