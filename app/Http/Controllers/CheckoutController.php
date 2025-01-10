<?php

namespace App\Http\Controllers;


use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
       public function index(){
        return view('Checkout');
    }
    public function Adddata(request $request)
{
    $request->validate([
        'FirstName' => 'required',
        'LastName' => 'required',
        'Email' => 'required|email',
        'Phone' => 'required|min:11|numeric',
        'Address' => 'required',
        'city' => 'required',
        'State' => 'required',
        'ZipCode' => 'required|numeric',
        'CardName' => 'required',
        'CardNumber' => 'required|numeric',
        'ExpiryDate' => 'required|date_format:m/y',
        'CVV' => 'required|digits:3',
    ]);
    
 $data=Checkout::create([
    'FirstName'=>$request->FirstName,
   'LastName' => $request->LastName,
    'Email'=> $request->Email,
    'Phone'=> $request->Phone,
    'Address'=>$request->Address,
    'city'=>$request->city,
    'State'=>$request->State,
    'ZipCode'=>$request->ZipCode,
    'CardName'=>$request->CardName,
    'CardNumber'=>$request->CardNumber,
    'ExpiryDate'=>$request->ExpiryDate,
    'CVV'=>$request->CVV,
]);
if($data){
    return redirect()->route('checkout');
}
}

}
