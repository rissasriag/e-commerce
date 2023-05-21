<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_categories')->insert([
            'product_id' => 1,
            'category_id' => 1
        ]);
        DB::table('products_categories')->insert([
            'product_id' => 2,
            'category_id' => 4
        ]);
        DB::table('products_categories')->insert([
            'product_id' => 3,
            'category_id' => 2
        ]);
        DB::table('products_categories')->insert([
            'product_id' => 4,
            'category_id' => 2
        ]);
        DB::table('products_categories')->insert([
            'product_id' => 5,
            'category_id' => 3
        ]);
    }
}
