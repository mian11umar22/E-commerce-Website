<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('admin/UserView',compact('data'));
        
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('admin/CreateUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'UserName'=>'required',
            'email'=>'required',
            'password'=>'required',
            'Role'=>'required'
        ]);
        User::create([
            'UserName'=>$request->UserName,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'Role'=>$request->Role
        ]);
        return redirect()->route('users.index')->with('success','User Added Successfuly');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::find($id);
        return view('admin/EditUser',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'UserName'=>'required',
            'email'=>'required',
            'password'=>'required',
            'Role'=>'required'
        ]);
        User::create([
            'UserName'=>$request->UserName,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'Role'=>$request->Role
        ]);
        return redirect()->route('users.index')->with('success','User Updated Successfuly');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->route('users.index')->with('success','User Deleted Successfuly');
    }
}
