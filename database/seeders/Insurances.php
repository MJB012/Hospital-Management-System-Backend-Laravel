<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Insurance;

class Insurances extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insuranceCompanies = [
            [
                'name' => 'Allstate Insurance',
                'city' => 'Northbrook',
                'state' => 'IL',
                'zip_code' => '60062'
            ],
            [
                'name' => 'State Farm',
                'city' => 'Bloomington',
                'state' => 'IL',
                'zip_code' => '61710'
            ],
            [
                'name' => 'GEICO',
                'city' => 'Chevy Chase',
                'state' => 'MD',
                'zip_code' => '20815'
            ],
            [
                'name' => 'Progressive',
                'city' => 'Mayfield Village',
                'state' => 'OH',
                'zip_code' => '44143'
            ],
            [
                'name' => 'Liberty Mutual',
                'city' => 'Boston',
                'state' => 'MA',
                'zip_code' => '02101'
            ]
        ];

        foreach ($insuranceCompanies as $insuranceCompanie) {
            Insurance::create([
                'name' => $insuranceCompanie['name'],
                'city' => $insuranceCompanie['city'],
                'state' => $insuranceCompanie['state'],
                'zip_code' => $insuranceCompanie['zip_code']
            ]);
        }
    }
}
