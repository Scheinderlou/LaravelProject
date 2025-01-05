<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    // Show the login page
    public function login()
    {
        return view('pages.admin');
    }

    // Handle login form submission
    public function loginPost(Request $request)
    {
        // Validate incoming request
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $credentials['password'] = bcrypt($credentials['password']);

        if (Auth::attempt($credentials)) {
            // Redirect to intended page or a default route (e.g., welcome)
            return redirect()->intended(route('home_page'));
        }

        // Redirect back with an error message if authentication fails
        return back()->with('error', 'Login details are not valid');
    }

    // Log the user out
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
