<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Speciality;

class Specialities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialities = [
            'No Specialities',
            'Allergists/Immunologists',
            'Anesthesiologist',
            'Cardiologist',
            'Dermatologists',
            'Emergency Medicine',
            'Endocrinologists',
            'Gastroenterologists',
            'Geriatrician',
            'Gynecologist',
            'Hematologists',
            'Infectious Disease Specialists',
            'Internists',
            'Nephrologists',
            'Neurologists',
            'Oncologists',
            'Ophthalmologists',
            'Otolaryngologist',
            'Pediatrician',
            'Physicians',
            'Pediatricians',
            'Psychiatrists',
            'Child and Adolescent Psychiatry',
            'Geriatric Psychiatry',
            'Pulmonologists',
            'Radiologist',
            'Rheumatologists',
            'Surgeon Cardiothoracic',
            'Surgeon General',
            'Surgeon Neuro',
            'Surgeon Orthopedic',
            'Surgeon Plastic',
            'Surgeon Vascular',
            'Urologists'
        ];

        foreach ($specialities as $speciality) {
            Speciality::create([
                'name' => $speciality
            ]);
        }
    }
}
