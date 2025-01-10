<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Login');
    }
    public function loginCheck(Request $request){
        $data=$request->validate([
            'email' => 'required|email|email',
        'password' => 'required|min:4',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Login successful
            return redirect()->route('dashboard')->with('success', 'Successfully logged in');
        } else {
            return redirect()->route('login')->with('error', 'Login Failed');
        }
        

            
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}

