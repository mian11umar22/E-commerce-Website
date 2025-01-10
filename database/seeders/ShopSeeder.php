<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Shop::create([
        'ProductName' => 'Hoodie',
        'ProductPrice' => '1000',
        'ProductImage' => 'images/hoodie.jpg',
        'ProductDescription' => 'Experience ultimate comfort with our premium hoodie. Designed with a soft, plush fabric and a relaxed fit, it features a spacious hood and a cozy kangaroo pocket. Ideal for layering or lounging, this hoodie combines warmth with a modern, casual aesthetic.',
        'SalePrice' => '800',
    ]);

    Shop::create([
        'ProductName' => 'Hoodies',
        'ProductPrice' => '2000',
        'ProductImage' => 'images/hoodies.jpg',
        'ProductDescription' => 'Experience ultimate comfort with our premium hoodie. Designed with a soft, plush fabric and a relaxed fit, it features a spacious hood and a cozy kangaroo pocket. Ideal for layering or lounging, this hoodie combines warmth with a modern, casual aesthetic.',
        'SalePrice' => '1600',
    ]);

    Shop::create([
        'ProductName' => 'Hoodie with Pocket',
        'ProductPrice' => '1500',
        'ProductImage' => 'images/hoodie-with-pocket.jpg',
        'ProductDescription' => 'Stay stylish and comfortable with our premium Hoodie with Pocket. Made from soft, breathable fabric, this hoodie features a spacious front pocket, perfect for keeping your hands warm or storing essentials.',
        'SalePrice' => '1000',
    ]);

    Shop::create([
        'ProductName' => 'Hoodie with Zipper',
        'ProductPrice' => '1500',
        'ProductImage' => 'images/hoodie-with-zipper.jpg',
        'ProductDescription' => 'A stylish and versatile hoodie featuring a smooth front zipper for easy wear, perfect for layering and everyday comfort.',
        'SalePrice' => '1000',
    ]);
}

    }

