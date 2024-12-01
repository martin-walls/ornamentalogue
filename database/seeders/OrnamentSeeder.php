<?php

namespace Database\Seeders;

use App\Models\Ornament;
use Illuminate\Database\Seeder;

class OrnamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ornament::factory()
            ->count(10)
            ->hasImages(2)
            ->create();
    }
}
