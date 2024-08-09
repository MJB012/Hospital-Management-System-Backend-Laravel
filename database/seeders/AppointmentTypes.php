<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppointmentType;

class AppointmentTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointmentTypes = [
            'Follow Up',
            'New Patient'
        ];

        foreach ($appointmentTypes as $appointmentType) {
            AppointmentType::create([
                'name' => $appointmentType
            ]);
        }
    }
}
