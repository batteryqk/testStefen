<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product',
            'slug' => 'product',
            'status' => 1,
            'price' => 100.00,
            'is_featured' => 0,
            'stock_no' => '123',
            'description' => 'Product description',
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Product1',
            'slug' => 'product1',
            'status' => 1,
            'price' => 200.00,
            'is_featured' => 0,
            'stock_no' => '1234',
            'description' => 'Product description1',
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Product2',
            'slug' => 'product2',
            'status' => 1,
            'price' => 1100.00,
            'is_featured' => 0,
            'stock_no' => '12344',
            'description' => 'Product description2',
            'category_id' => 3
        ]);
    }
}
