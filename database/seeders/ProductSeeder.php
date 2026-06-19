<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Hoodie Oversize Black',
            'category' => 'Hoodie',
            'price' => 150000,
            'stock' => 10,
            'description' => 'Hoodie streetwear kekinian',
            'image' => 'hoodie.jpg',
        ]);

        Product::create([
            'name' => 'T-Shirt Streetwear White',
            'category' => 'T-Shirt',
            'price' => 85000,
            'stock' => 20,
            'description' => 'Kaos simple stylish',
            'image' => 'kaos.jpg',
        ]);

        Product::create([
            'name' => 'Jacket Bomber Army',
            'category' => 'Jacket',
            'price' => 220000,
            'stock' => 5,
            'description' => 'Jaket bomber premium',
            'image' => 'bomber.jpg',
        ]);

        Product::create([
            'name' => 'Jaket Denim Biru',
            'category' => 'Jacket',
            'price' => 180000,
            'stock' => 8,
            'description' => 'Jaket denim kasual warna biru muda',
            'image' => 'jaket.jpg',
        ]);

        Product::create([
            'name' => 'Kemeja Batik Merah',
            'category' => 'Shirt',
            'price' => 120000,
            'stock' => 12,
            'description' => 'Kemeja batik motif tradisional modern',
            'image' => 'batik.jpg',
        ]);
    }
}
