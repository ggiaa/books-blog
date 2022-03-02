<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function index()
    {
        return view('signin.signin', [
            "title" => "SIGN IN"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "username" => 'required',
            "password" => 'required|min:5',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('failedmessage', 'Sign-in Failed! try again!');
    }

    public function signout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
