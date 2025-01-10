<?php

namespace App\Http\Controllers;

use App\Mail\Stmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function email(Request $request){
        $request->validate([
            'email' => 'required',
        ]);
        Mail::raw('New subscriber: ' . $request->email, function ($message) {
            $message->to('mian11umar22@gmail.com')
                    ->subject('New Newsletter Subscription');
        });
    return redirect()->route('home');
    }
}
