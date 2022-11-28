<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->products as $product){
            Product::create($product);
        }
    }

    private $products = [
        ['product_code' => 'CF1', 'name' => 'Coffee', 'offer_desc' => 'Price matched', 'price' => 11.23, ],
        ['product_code' => 'FR1', 'name' => 'Fruit tea', 'offer_desc' => 'Buy one get one free', 'price' => 3.11],
        ['product_code' => 'SR1', 'name' => 'Strawberry', 'offer_desc' => 'Price drop if bought three or more than three','price' => 5.00]
    ];
}
