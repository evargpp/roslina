<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            ['name' => 'sztuki', 'symbol' => 'pcs'],
            ['name' => 'gramy',  'symbol' => 'g'],
            ['name' => 'kilogramy', 'symbol' => 'kg'],
            ['name' => 'mililitry', 'symbol' => 'ml'],
            ['name' => 'litry', 'symbol' => 'l'],
        ];

        foreach ($units as $unit) {
            Unit::updateOrCreate(
                ['symbol' => $unit['symbol']], // unikalność
                $unit
            );
        }
    }
}
