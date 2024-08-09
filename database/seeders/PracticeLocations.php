<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PracticeLocation;

class PracticeLocations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $practiceLocations = [
            'No Practice Location',
            'Hospital of the University of Pennsylvania (HUP) - Philadelphia',
            'UPMC Presbyterian Shadyside - Pittsburgh',
            'Pennsylvania Hospital - Philadelphia',
            'Thomas Jefferson University Hospitals - Philadelphia',
            'Allegheny General Hospital - Pittsburgh',
            "Children's Hospital of Philadelphia (CHOP) - Philadelphia",
            'Lehigh Valley Hospital - Allentown',
            'UPMC Mercy - Pittsburgh',
            'Geisinger Medical Center - Danville',
            'Temple University Hospital - Philadelphia',
            'UPMC Pinnacle - Harrisburg',
            "St. Luke's University Health Network - Bethlehem",
            'Lancaster General Hospital - Lancaster',
            'Reading Hospital - Reading',
            'Einstein Medical Center Philadelphia - Philadelphia'
        ];

        foreach ($practiceLocations as $practiceLocation) {
            PracticeLocation::create([
                'name' => $practiceLocation
            ]);
        }
            
    }
}
