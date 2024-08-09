<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PurposeOfVisit;

class PurposeOfVisits extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$purposeOfVisits = [
			'Follow-up appointment',
			'Emergency treatment',
			'Specialist consultation'
		];

		
			foreach ($purposeOfVisits as $purposeOfVisit) {
				PurposeOfVisit::create([
					'name' => $purposeOfVisit
				]);
			}
	}
}
