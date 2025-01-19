<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeasingPeriodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leasing_periods')->insert([
            [
                'device_id' => 1,
                'leasing_plan_id' => 1,
                'leasing_construction_id' => 51342268,
                'leasing_construction_maximum_training' => 1000,
                'leasing_construction_maximum_date' => '2021-06-01',
                'start_date' => '2021-01-01',
                'next_check' => '2021-07-01 17:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_id' => 1,
                'leasing_plan_id' => 1,
                'leasing_construction_id' => 42115269,
                'leasing_construction_maximum_training' => null,
                'leasing_construction_maximum_date' => '2021-10-01',
                'start_date' => '2021-02-01',
                'next_check' => '2021-08-01 17:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_id' => 1,
                'leasing_plan_id' => 1,
                'leasing_construction_id' => 28524612,
                'leasing_construction_maximum_training' => 50,
                'leasing_construction_maximum_date' => null,
                'start_date' => '2021-03-01',
                'next_check' => '2021-09-01 17:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_id' => 1,
                'leasing_plan_id' => 1,
                'leasing_construction_id' => 12345678,
                'leasing_construction_maximum_training' => 500,
                'leasing_construction_maximum_date' => '2022-01-01',
                'start_date' => '2021-04-01',
                'next_check' => '2021-10-01 17:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_id' => 1,
                'leasing_plan_id' => 1,
                'leasing_construction_id' => 87654321,
                'leasing_construction_maximum_training' => 200,
                'leasing_construction_maximum_date' => '2022-06-01',
                'start_date' => '2021-05-01',
                'next_check' => '2021-11-01 17:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_id' => 1,
                'leasing_plan_id' => 1,
                'leasing_construction_id' => 10293847,
                'leasing_construction_maximum_training' => 700,
                'leasing_construction_maximum_date' => '2022-12-01',
                'start_date' => '2021-06-01',
                'next_check' => '2021-12-01 17:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_id' => 1,
                'leasing_plan_id' => 1,
                'leasing_construction_id' => 56473829,
                'leasing_construction_maximum_training' => 300,
                'leasing_construction_maximum_date' => '2023-03-01',
                'start_date' => '2021-07-01',
                'next_check' => '2022-01-01 17:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_id' => 1,
                'leasing_plan_id' => 1,
                'leasing_construction_id' => 29384756,
                'leasing_construction_maximum_training' => null,
                'leasing_construction_maximum_date' => null,
                'start_date' => '2021-08-01',
                'next_check' => '2022-02-01 17:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
