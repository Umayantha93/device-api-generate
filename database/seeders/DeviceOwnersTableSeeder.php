<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceOwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deviceOwners = [
            [
                'billing_name' => 'WebOrigo Magyarország Zrt.',
                'address_country' => '348',
                'address_zip' => '1027',
                'address_city' => 'Budapest',
                'address_street' => 'Bem József utca 9. fszt.',
                'vat_number' => '28767116-2-41',
            ],
            [
                'billing_name' => 'Alpha Technologies Inc.',
                'address_country' => '840',
                'address_zip' => '10001',
                'address_city' => 'New York',
                'address_street' => '5th Avenue, 20th Floor',
                'vat_number' => '12345678-9-01',
            ],
            [
                'billing_name' => 'Beta Solutions Ltd.',
                'address_country' => '826',
                'address_zip' => 'W1A 1AA',
                'address_city' => 'London',
                'address_street' => '10 Downing Street',
                'vat_number' => '87654321-1-02',
            ],
            [
                'billing_name' => 'Gamma Group GmbH',
                'address_country' => '276',
                'address_zip' => '10115',
                'address_city' => 'Berlin',
                'address_street' => 'Unter den Linden 77',
                'vat_number' => '54321876-3-04',
            ],
            [
                'billing_name' => 'Delta Enterprises Pvt. Ltd.',
                'address_country' => '356',
                'address_zip' => '110001',
                'address_city' => 'New Delhi',
                'address_street' => 'Connaught Place, Block A',
                'vat_number' => '65432187-4-05',
            ],
            [
                'billing_name' => 'Epsilon Ventures LLP',
                'address_country' => '124',
                'address_zip' => 'M5J 2N8',
                'address_city' => 'Toronto',
                'address_street' => 'Bay Street, Suite 100',
                'vat_number' => '98765432-5-06',
            ],
            [
                'billing_name' => 'Zeta Industries Co.',
                'address_country' => '392',
                'address_zip' => '100-0001',
                'address_city' => 'Tokyo',
                'address_street' => 'Marunouchi, Chiyoda',
                'vat_number' => '19283746-7-08',
            ],
            [
                'billing_name' => 'Eta Trading AG',
                'address_country' => '756',
                'address_zip' => '8001',
                'address_city' => 'Zurich',
                'address_street' => 'Bahnhofstrasse 10',
                'vat_number' => '91827364-8-09',
            ],
            [
                'billing_name' => 'Theta Corporation',
                'address_country' => '250',
                'address_zip' => '75008',
                'address_city' => 'Paris',
                'address_street' => 'Champs-Élysées 45',
                'vat_number' => '56473829-9-07',
            ],
            [
                'billing_name' => 'Iota Technologies Oy',
                'address_country' => '246',
                'address_zip' => '00100',
                'address_city' => 'Helsinki',
                'address_street' => 'Mannerheimintie 10',
                'vat_number' => '12837645-6-10',
            ],
        ];

        foreach ($deviceOwners as $owner) {
            DB::table('device_owners')->insert($owner);
        }
    }
}
