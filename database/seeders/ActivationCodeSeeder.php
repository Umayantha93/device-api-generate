<?php

namespace Database\Seeders;

use App\Models\ActivationCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ActivationCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Generate 100 activation codes
       $activationCodes = [];
       for ($i = 0; $i < 100; $i++) {
           $activationCodes[] = [
               'code' => $this->generateActivationCode(),
           ];
       }

       // Insert activation codes into the database
       ActivationCode::insert($activationCodes);
   }

   /**
    * Generate a random activation code in the format XB67FGC2561XDFG2
    */
   private function generateActivationCode()
   {
       $segments = [
           Str::random(2),             // Two uppercase letters
           rand(10, 99),               // Two digits
           Str::random(3),             // Three uppercase letters
           rand(1000, 9999),           // Four digits
           Str::random(5),             // Five uppercase letters
       ];

       return strtoupper(implode('', $segments)); // Combine and convert to uppercase
    }
}
