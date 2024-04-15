<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        User::factory()->create([
                'name' => 'admin',
                'email' => 'otienof534@gmail.com',
                'password'=>'admin1234',
                'is_admin'=>1,
            ]);

        /**Product::create([
            'name'=>'Lenovo ThinkPad',
            'price'=>'150000',
            'retail_price'=>'180000',
            'description'=>' T14 Gen 2, Core i5 1135G7, 8GB, 512GB SSD, Windows 10 Pro, 14″ FHD Touch Screen 20W000S4UE',
        ]);*/

       // Product::factory(10)->create();
        //Category::factory(7)->create();
    }
}
