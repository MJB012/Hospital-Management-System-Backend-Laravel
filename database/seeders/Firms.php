<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Firm;

class Firms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firms = [
            [
                'name' => 'Tech Solutions Inc.',
                'city' => 'San Francisco',
                'state' => 'CA',
                'zip_code' => '94107'
            ],
            [
                'name' => 'Innovative Designs LLC',
                'city' => 'Austin',
                'state' => 'TX',
                'zip_code' => '73301'
            ],
            [
                'name' => 'Healthcare Solutions Co.',
                'city' => 'Chicago',
                'state' => 'IL',
                'zip_code' => '60601'
            ],
            [
                'name' => 'Financial Experts Group',
                'city' => 'New York',
                'state' => 'NY',
                'zip_code' => '10001'
            ],
            [
                'name' => 'Green Energy Corp.',
                'city' => 'Seattle',
                'state' => 'WA',
                'zip_code' => '98101'
            ]
        ];

        foreach ($firms as $firm) {
            Firm::create([
                'name' => $firm['name'],
                'city' => $firm['city'],
                'state' => $firm['state'],
                'zip_code' => $firm['zip_code']
            ]);
        }
    }
}
