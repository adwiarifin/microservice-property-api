<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder {
    public function run()
    {
        House::factory(10)->create();
    }
}
