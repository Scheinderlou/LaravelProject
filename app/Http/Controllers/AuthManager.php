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
            'password' => 'required|min:6|confirmed', 
        ]);
        
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), 
        ]);

        
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
   
    public function login()
    {
        return view('pages.admin');
    }

    
    public function loginPost(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended(route('admin_page'))->with('success', 'Welcome back!');
        }

        
        return back()->with('error', 'Invalid email or password.');
    }

    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('pages.admin')->with('success', 'You have been logged out.');
    }
}
