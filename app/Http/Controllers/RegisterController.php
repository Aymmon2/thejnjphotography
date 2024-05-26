<?php
namespace App\Http\Controllers;

use App\Models\Userss; // Make sure to import the Userss model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:userss'], // Change 'unique:users' to 'unique:userss'
            'username' => ['required', 'string', 'max:255', 'unique:userss'], // Change 'unique:users' to 'unique:userss'
            'password' => ['required', 'string', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Userss::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('signinpage')->with('success', 'Registration successful. Please login.');
    }
}
