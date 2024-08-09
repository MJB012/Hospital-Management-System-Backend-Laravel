<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $roles = ['admin', 'doctor', 'patient'];

         foreach($roles as $role) {
            UserRole::create([
                'name' => $role
            ]);
         }
    }
}
