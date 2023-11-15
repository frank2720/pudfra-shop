<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /**Product::create([
            'name'=>'Lenovo ThinkPad',
            'price'=>'150000',
            'retail_price'=>'180000',
            'description'=>' T14 Gen 2, Core i5 1135G7, 8GB, 512GB SSD, Windows 10 Pro, 14″ FHD Touch Screen 20W000S4UE',
        ]);*/

        Product::factory(10)->create();
    }
}
