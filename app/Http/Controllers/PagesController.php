<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Display the index page, and if the user is authenticated, pass user data to the view
    public function index()
    {
        if (session()->has('user_email')) {
            // Retrieve the user's email from the session.
            $userEmail = session('user_email');
             // Fetch user data from the database based on the email.
            $userData = User::where('email', $userEmail)->first();
             // Return the view 'client.index' with the user data if available.
            return view('client.index', ['userData' => $userData]);
        } else {
        // If the user is not authenticated, redirect them to the login page.
            return redirect('/login');
        }
    }
    
    public function companies(){
        return view('client.companies');
    }
    public function about(){
        return view('client.about');
    }
    public function contact(){
        return view('client.contact');
    }
}
