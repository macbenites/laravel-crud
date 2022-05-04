<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'name' => Str::random(10),
            'description' => Str::random(20),
            'price' => rand(1, 100),
            'image' => 'https://via.placeholder.com/150x150',            
        ]);
    }
}
