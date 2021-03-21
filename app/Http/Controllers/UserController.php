<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return view('users', [
            'users' => User::all()
        ]);
    }

    public function edit(Request $request, int $id) {
        return view('user', [
            'user' => User::find($id),
        ]);
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::find($id);
        
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
        return redirect('/user');
    }
}   
