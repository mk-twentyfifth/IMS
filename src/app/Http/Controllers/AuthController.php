<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Get the credentials from the request
        $credentials = $request->only('name', 'password');

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to the intended page
            return redirect()->intended('/');
        }

        // Authentication failed, redirect back with an error message
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
}
