<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CaseType;

class CaseTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $caseTypes = [
            'Surgcal',
            'Non-Surgical'
        ];

        foreach ($caseTypes as $caseType) {
            CaseType::create([
                'name' => $caseType
            ]);
        }
    }
}
