<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppointmentTime;


class AppointmentTimes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointmentTimes = [
            '10:00 AM - 10:30 AM',
            '10:30 AM - 11:00 AM',
            '11:00 AM - 11:30 AM',
            '11:30 AM - 12:00 AM',
            '12:00 PM - 12:30 PM',
            '12:30 PM - 01:00 PM',
            '01:00 PM - 01:30 PM',
            '01:30 PM - 02:00 PM',
            '02:00 PM - 02:30 PM',
            '02:30 PM - 03:00 PM',
            '03:00 PM - 03:30 PM',
            '03:30 PM - 04:00 PM',
            '04:00 PM - 04:30 PM',
            '04:30 PM - 05:00 PM',
        ];

        foreach($appointmentTimes as $appointmentTime) {
            AppointmentTime::create([
                'appoitnment_time' => $appointmentTime
            ]);
        }
    }
}
