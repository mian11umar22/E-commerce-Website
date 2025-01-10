<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total = User::count();
        return view('admin/Dashboard',compact('total'));
    }
}
