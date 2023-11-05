<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        if (session()->has('user_email')) {
            $userEmail = session('user_email');
            $userData = User::where('email', $userEmail)->first();
            return view('client.index', ['userData' => $userData]);
        } else {
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
