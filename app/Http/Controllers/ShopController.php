<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        $shop = Shop::all();
        return view('shop', compact('shop'));
    }
    public function SingleProduct( string $id){
        $single = Shop::find($id);
        return view('SingleProduct', compact('single'));
    }
    Public function AddToCart(string $id){
        $cart =shop::find($id);
        if(!$cart){
            return redirect()->route('shop')->with('status', 'Product not found');}
            $product = session()->get('cart',[]);
            if(isset($product[$id])){
                $product[$id]['quantity']++;
            }else
            $product[$id]=[
                'ProductName'=>$cart->ProductName,
                'SalePrice'=>$cart->SalePrice,
                'ProductImage'=>$cart->ProductImage,
                'id'=>$cart->id,
                'quantity'=>1
            ];
            session()->put('cart',$product);
            return redirect()->route('shop')->with('status','Product added to cart successfully');
            
}
public function flush(){
    session()->flush();
    return redirect()->route('cart');
}
}
