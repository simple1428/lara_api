<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 99.99,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 199.99,
                'stock' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for Product 3',
                'price' => 299.99,
                'stock' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}