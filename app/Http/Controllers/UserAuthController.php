<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    // Register Method
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:register_details,email',
            'password' => 'required|string|min:6',
        ]);

        // Create a new user in the RegisterDetails table
        RegisterDetail::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect with success message
        return redirect()->route('user.login')->with('success', 'User registered successfully! Please log in.');
    }

    // Login Method
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the user exists
        $user = RegisterDetail::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Store user info in session
            session(['user' => $user]);

            // Redirect to the form page (you can change this to any page you want)
            return redirect()->route('form.show');
        } else {
            return back()->withErrors(['Invalid email or password']);
        }
    }

    // Optionally, you can add a method for logging out
    public function logout(Request $request)
    {
        // Clear the user session
        $request->session()->forget('user');
        return redirect()->route('user.login')->with('success', 'Logged out successfully!');
    }

    // Optionally, ensure logged-in users are redirected from the login page
    public function showLoginForm()
    {
        if (session('user')) {
            return redirect()->route('form.show');
        }

        return view('auth.login'); // Your login form view
    }
}
