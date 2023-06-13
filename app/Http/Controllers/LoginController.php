<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('main');
        } else {
            return redirect()->back()->with('error', 'Wrong username or password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
