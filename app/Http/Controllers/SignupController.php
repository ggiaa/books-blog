<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup.signup', [
            'title' => "SIGN UP"
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|unique:users|min:1|max:15',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:30',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/sign-in')->with('success', 'Sign-Up successfully! Please sign-in now!');
    }
}
