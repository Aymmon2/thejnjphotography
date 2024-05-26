<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Userss;

class LoginControllerr extends Controller
{
    public function showLoginForm()
    {
        return view('auth.signin');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        // Query the database to find a user with the provided email
        $user = Userss::where('email', $email)->first();

        // Check if a user with the provided email exists and if the password matches
        if ($user && password_verify($password, $user->password)) {
            // Authentication successful
            return redirect()->intended('preview');
        }

        // Authentication failed, redirect back with error message
        return redirect()->route('signinpage')->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
}
