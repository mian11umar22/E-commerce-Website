<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Signup(){
        return view('SignUp');
    }
    public function store(Request $request){
       $data= $request->validate([
        'UserName' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:4',
    ]); 
       
        User::create([
            'UserName'=>$request->UserName,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)

        ]);
        return redirect()->route('Signup');
    }
}
