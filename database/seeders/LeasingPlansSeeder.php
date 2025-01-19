<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeasingPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leasing_plans')->insert([
            [
                'name' => 'Basic Plan',
                'maximum_training' => 50,
                'maximum_date' => '2023-12-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Standard Plan',
                'maximum_training' => 100,
                'maximum_date' => '2024-06-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium Plan',
                'maximum_training' => 200,
                'maximum_date' => '2025-01-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Enterprise Plan',
                'maximum_training' => 500,
                'maximum_date' => '2025-12-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
