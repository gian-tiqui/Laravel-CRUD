<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect the user to the desired page after registration
        return redirect('/toy')->with('success', 'Registration successful!');
    }
}
