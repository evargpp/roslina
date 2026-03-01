<?php

namespace Database\Seeders;

use App\Models\Species;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Species::updateOrCreate(
            [
                'name' => 'Papryka',
                'latin_name' => 'Capsicum annuum',
                'desc' => 'Papryka to popularna roślina uprawna, znana ze swoich jaskrawych owoców, które mogą być słodkie lub ostre. Jest bogata w witaminę C i często używana w kuchni na całym świecie.',
            ]
        );

        Species::updateOrCreate(
            [
                'name' => 'Pomidor',
                'latin_name' => 'Solanum lycopersicum',
                'desc' => 'Pomidor to popularna roślina uprawna, znana ze swoich jaskrawych owoców, które są często używane w kuchni na całym świecie. Jest bogaty w witaminę C i lycopene.',
            ]
        );

    }
}
