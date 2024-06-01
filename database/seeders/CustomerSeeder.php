<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
                ->count(30)
                ->hasinvoices(12)
                ->create();

        Customer::factory()
                ->count(10)
                ->hasinvoices(25)
                ->create();
        
        Customer::factory()
                ->count(100)
                ->hasinvoices(5)
                ->create();
        
        Customer::factory()
                ->count(15)
                ->create();
    }
}
