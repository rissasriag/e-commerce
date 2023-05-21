<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            'product_id' => 1,
            'uom' => 'KG',
            'weight' => '10KG',
            'qty' => 100
        ]);
        DB::table('stocks')->insert([
            'product_id' => 2,
            'uom' => 'Sak',
            'weight' => '5KG',
            'qty' => 100
        ]);
        DB::table('stocks')->insert([
            'product_id' => 3,
            'uom' => 'Box',
            'weight' => '20KG',
            'qty' => 100
        ]);
        DB::table('stocks')->insert([
            'product_id' => 4,
            'uom' => 'Keler',
            'weight' => '10KG',
            'qty' => 50
        ]);
        DB::table('stocks')->insert([
            'product_id' => 5,
            'uom' => 'KG',
            'weight' => '10KG',
            'qty' => 50
        ]);
    }
}
