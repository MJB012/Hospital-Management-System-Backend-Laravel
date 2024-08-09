<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class Categories extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categories = [
      'Emergency',
      'Inpatients',
      'Outpatients'
    ];

    foreach ($categories as $category) {
      Category::create([
        'name' => $category
      ]);
    }
  }
}
