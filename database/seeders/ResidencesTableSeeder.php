<?php

namespace Database\Seeders;

use App\Models\Residence;
use Illuminate\Database\Seeder;

class ResidencesTableSeeder extends Seeder {
    public function run()
    {
        Residence::factory(10)->create();
    }
}
