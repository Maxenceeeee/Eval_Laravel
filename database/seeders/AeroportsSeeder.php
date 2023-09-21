<?php

namespace Database\Seeders;

use App\Models\aeroports;
use Illuminate\Database\Seeder;

class AeroportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        aeroports::factory()
            ->count(10)
            ->create();
    }
}
