<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CartController extends Controller

{
    
   
    public function cart(){
        $carts= session()->get('cart',[]);
        
        $totalItems = array_sum(array_column($carts, 'quantity'));
        return  view('cart',compact('carts','totalItems'));
       }
   
    public function UpdateQuantity(string $id ,string $action){
    
        $product =session()->get('cart',[]);
        if(isset($product[$id])){
            if($action == 'increase'){
                $product[$id]['quantity']++;
            }elseif($action=='decrease'&& 'quantity'>1){
                $product[$id]['quantity']--;
            }
            session()->put('cart',$product);
        }
        return redirect()->route('cart');
    }
    public function remove(string $id){
        $cart = session()->get('cart',[]);
        if($cart[$id]){
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()-> route('cart');
    
    }
    
}
