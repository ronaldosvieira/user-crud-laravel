<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class UserController extends Controller {
    var $occupations = [
        '' => '(Select one)',
        'Student' => 'Student',
        'Medic' => 'Medic',
        'Driver' => 'Driver',
        'Software Developer' => 'Software Developer'
    ];
    
    public function index() {
        $users = User::orderBy('created_at', 'asc')->get();

        return view('user-index', [
            'users' => $users
        ]);
    }
    
    public function create() {
        return view('user-create', [
            'occupations' => $this->occupations
        ]);
    }
    
    public function store(Request $request) {
        $validator = validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'birthday' => 'required|date_format:Y-m-d',
            'occupation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/user/create')
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

        return redirect('/user');
    }
    
    public function show(int $id) {
        $user = User::find($id);
        
        return view('user-show', [
            'user' => $user
        ]);
    }
    
    public function edit(int $id) {
        $user = User::find($id);
        
        return view('user-edit', [
            'user' => $user,
            'occupations' => $this->occupations
        ]);
    }
    
    public function update(Request $request, int $id) {
        $validator = validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'birthday' => 'required|date_format:Y-m-d',
            'occupation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/user/' . $id . '/edit')
                ->withInput()
                ->withErrors($validator);
        }
        
        $user = User::find($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->occupation = $request->occupation;
        $user->notes = $request->notes;
        
        $user->save();
        
        return redirect('/user/' . $id);
    }
    
    public function destroy(User $user) {
        $user->delete();
    
        return redirect('/user');
    }
}