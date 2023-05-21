<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Beras Cap Kaki tiga',
            'desc' => 'Beras yang digiling engga pake mesin',
            'price' => 70000,
            'photo' => 'curved-6.jpg',
            'status' => 'ready',
        ]);
        DB::table('products')->insert([
            'name' => 'Teh Pucuk Harum',
            'desc' => 'Minuman Teh Kemasan Botol, enak klo diminum dingin',
            'price' => 45000,
            'photo' => 'curved-6.jpg',
            'status' => 'ready',
        ]);
        DB::table('products')->insert([
            'name' => 'Chitato',
            'desc' => 'Snack enak pokoknya',
            'price' => 25000,
            'photo' => 'curved-6.jpg',
            'status' => 'ready',
        ]);
        DB::table('products')->insert([
            'name' => 'SOOOOOOOO NICEEEE',
            'desc' => 'Sosis So Nice...... Enak tau!!!',
            'price' => 30000,
            'photo' => 'curved-6.jpg',
            'status' => 'ready',
        ]);
        DB::table('products')->insert([
            'name' => 'Crab Stick',
            'desc' => 'Frozen food yg enak pokoknya, apalagi klo buat rebusan.',
            'price' => 23000,
            'photo' => 'curved-6.jpg',
            'status' => 'ready',
        ]);
    }
}
