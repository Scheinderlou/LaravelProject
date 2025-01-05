<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{

    public function show()
    {
        return view('pages.registration');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // Password confirmation required
        ]);
        // Create a new user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // Hash the password
        ]);

        // Redirect to a welcome or login page
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
    // Show the login page
    public function login()
    {
        return view('pages.admin');
    }

    // Handle login form submission
    public function loginPost(Request $request)
    {
        // Validate the login inputs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect to the intended page on successful login
            return redirect()->intended(route('home_page'))->with('success', 'Welcome back!');
        }

        // Redirect back to login page with an error message
        return back()->with('error', 'Invalid email or password.');
    }

    // Log the user out
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin')->with('success', 'You have been logged out.');
    }
}
