<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([
            'content' => 'Ecommerce is the electronic buying and selling of goods
                            and services, usually via the internet.
                            Businesses can build their own ecommerce website, set up
                            an ecommerce storefront on an
                            established selling site like Amazon, or do it all for a
                            multi-channel approach.
                            Moreover, ecommerce enables businesses to streamline
                            operations, optimize inventory management, and
                            personalize customer experiences through data-driven
                            insights. With the proliferation of mobile devices and
                            secure payment gateways, ecommerce continues to evolve,
                            shaping the future of retail in an increasingly digital
                            world.',
            'title' => 'Why Choose WooCommerce?',
            'url' => 'public/images/cart.webp',
        ]);
    }
}
