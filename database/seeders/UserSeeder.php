<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Owner D&G Store',
            'email' => 'dngstore.owner@gmail.com',
            'role' => 0,
            'password' => Hash::make('ownernich')
        ]);
        DB::table('users')->insert([
            'name' => 'Admin D&G Store',
            'email' => 'dngstore.admin@gmail.com',
            'role' => 1,
            'password' => Hash::make('adminajah')
        ]);
        DB::table('users')->insert([
            'name' => 'Driver D&G Store',
            'email' => 'dngstore.driver@gmail.com',
            'role' => 2,
            'password' => Hash::make('driverdngstoregoesbrrrh')
        ]);
    }
}
