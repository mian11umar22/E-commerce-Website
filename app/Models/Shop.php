<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'ProductName', 
        'ProductPrice', 
        'ProductImage', 
        'SalePrice', 
        'ProductDescription'
    ];
    
}
