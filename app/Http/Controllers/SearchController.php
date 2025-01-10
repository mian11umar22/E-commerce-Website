<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $query = $request->input('query');
        $request->validate([
            'query'=>'required'
        ]);
        $query = strtolower($request->input('query')); // Convert to lowercase
        $products = Shop::whereRaw('LOWER(ProductName) LIKE ?', ["%{$query}%"])
            ->orWhereRaw('LOWER(ProductDescription) LIKE ?', ["%{$query}%"])
            ->get();
        
                   return view('Result', compact('products', 'query'));

    }
}
