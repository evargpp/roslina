<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seed;

class SeedSeeder extends Seeder
{
    public function run(): void
    {
        Seed::factory()
            ->count(50)
            ->create();
    }
}
