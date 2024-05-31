<?php

namespace Database\Seeders;

use App\Models\Town;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Town::factory()->count(100)->create();
    }
}
