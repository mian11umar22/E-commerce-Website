<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Cache\RedisTagSet;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Shop::all();
        return view('admin/ProductView', compact('data'));
    } 
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ProductName'=> 'required',
            'ProductPrice'=>'required',
            'ProductImage'=>'required',
        'SalePrice'=>'required',
        'ProductDescription'=>'required'
        ]);
        $path = $request->file('ProductImage')->store('images','public');
        Shop::create([
            'ProductName'=> $request->ProductName,
            'ProductPrice'=>$request->ProductPrice,
            'ProductImage'=> $path,
        'SalePrice'=>$request->SalePrice,
        'ProductDescription'=>$request->ProductDescription

        ]);
        return redirect()->route('Products.index')->with('status','product added Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = shop::find($id);
        return view('admin/SingleView',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $data= shop::find($id);
         return view('admin/EditView',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $data = Shop::findOrFail($id);  // Ensure the product exists

    $request->validate([
        'ProductName' => 'required',
        'ProductPrice' => 'required|numeric',
        'ProductImage' => 'required', 
        'SalePrice' => 'required|numeric',
        'ProductDescription' => 'required'
    ]);

    // Handle image upload
    if ($request->hasFile('ProductImage')) {
        $path = $request->file('ProductImage')->store('images', 'public');
    } else {
        $path = $data->ProductImage;
    }

    $data->update([
        'ProductName' => $request->ProductName,
        'ProductPrice' => $request->ProductPrice,
        'ProductImage' => $path,
        'SalePrice' => $request->SalePrice,
        'ProductDescription' => $request->ProductDescription
    ]);

    return redirect()->route('Products.index')->with('status', 'Product updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = shop::find($id);
        $data->delete();
        if($data)
        return redirect()->route('Products.index');
    }
}
