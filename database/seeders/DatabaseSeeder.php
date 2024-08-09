<?php

namespace Database\Seeders;

use App\Models\PracticeLocation;
use App\Models\Speciality;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            UserRoles::class,
            AppointmentTypes::class,
            PurposeOfVisits::class,
            CaseTypes::class,
            Categories::class,
            PracticeLocations::class,
            Specialities::class,
            Insurances::class,
            Firms::class,
            AppointmentTimes::class,
            Users::class
        ]);
    }
}
