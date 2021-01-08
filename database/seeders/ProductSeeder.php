<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'id'    => 1,
                'name'  => 'iPad',
                'price' => '89900'
            ],
            [
                'id'    => 2,
                'name'  => 'iPhone',
                'price' => '139900'
            ],
            [
                'id'    => 3,
                'name'  => 'AlienWare',
                'price' => '249900'
            ]
        ];

        Product::insert($products);
    }
}
