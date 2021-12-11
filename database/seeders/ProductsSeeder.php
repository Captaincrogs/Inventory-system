<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ProductsSeeder extends Seeder
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
            'id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'name' => 'roos',
            'image' => '',
            ],
            [
        

            'id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'name' => 'tulp',
            'image' => '',
            ],
            [
        

            'id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'name' => 'lavender',
            'image' => '',
            ],
            [
        

            'id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'name' => 'klaproos',
            'image' => '',
            ],
            [
        

            'id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'name' => 'melageon',
            'image' => '',
            ]
            
        ]);
    }
}
