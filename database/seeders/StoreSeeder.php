<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('store')->insert([
            
                [
                'id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'store_name' => 'Amsterdam',
                'location' => 'lorem ipsum',
                ],
                [
                'id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'store_name' => 'Almere',
                'location' => 'lorem ipsum',
                ],
                [
                'id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'store_name' => 'Lelystad',
                'location' => 'lorem ipsum',
                ]
            ]);
                
    }
}
