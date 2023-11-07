<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display the registration form view.
    public function showRegistrationForm()
    {
        return view('pages.register');
    }
    // Register a new user based on the submitted form data
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:3',
        ]);

        // Create a new user in the database
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Log in the user by storing their data in the session
        // Redirect to the profile (home) page
        return redirect('/');
    }
    // Display the login form view.
    public function showLoginForm()
    {
        return view('pages.login');
    }
    // Handle user authentication based on submitted credentials.
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // Implement login logic, store user data, and manage sessions
       
            // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // // Authentication successful, store user data in the session
             $user = Auth::user();
             session()->put('user_email', $user->email);
         // Redirect to the profile  page 
            return redirect('/profile');
        }

        // Authentication failed, return back with an error message
        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log out the user

        $request->session()->invalidate(); // Invalidate the user's session

        $request->session()->regenerateToken(); // Regenerate the CSRF token

        // Redirect to the login page or any other desired page
        return redirect('/');
    }
}