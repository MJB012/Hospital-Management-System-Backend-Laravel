<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'practice_location_id' => 1,
            'speciality_id' => 1,
            'first_name' => 'Muhammad',
            'last_name' => 'Jamil',
            'email' => 'admin@ovada.com',
            'gender' => 'Male',
            'dob' => '1999-07-03',
            'ssn' => '123-45-6789',
            'address' => 'St no. 5 House No. 48',
            'city' => 'Sahiwal',
            'state' => 'Punjab',
            'zip_code' => '57000',
            'password' => Hash::make('Nahidasda012!')
        ]);
    }
}
