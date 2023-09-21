<?php

namespace Database\Seeders;

use App\Models\compagnies;
use Illuminate\Database\Seeder;

class CompagniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        compagnies::factory()
            ->count(10)
            ->create();
    }
}
