<?php

namespace Database\Seeders;

use App\Models\Ornament;
use App\Models\Tree;
use Illuminate\Database\Seeder;

class OrnamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tree::factory()
            ->has(
                Ornament::factory()
                    ->count(10)
                    ->hasImages(2)
            )
            ->create();
    }
}
