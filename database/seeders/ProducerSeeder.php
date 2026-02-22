<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Producer;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producers = [
            [
                'name'  => 'PlantiCo',
                'nip'   => '5250001234',
                'phone' => '+48 22 123 45 67',
                'www'   => 'https://www.plantico.pl',
                'email' => 'biuro@plantico.pl',
            ],
            [
                'name'  => 'Legutko',
                'nip'   => '6760005678',
                'phone' => '+48 12 345 67 89',
                'www'   => 'https://www.legutko.com.pl',
                'email' => 'info@legutko.com.pl',
            ],
            [
                'name'  => 'PNOS Ożarów Mazowiecki',
                'nip'   => '1180004321',
                'phone' => '+48 22 721 11 11',
                'www'   => 'https://www.pnos.pl',
                'email' => 'sekretariat@pnos.pl',
            ],
            [
                'name'  => 'Bejo Zaden Poland',
                'nip'   => '5210009876',
                'phone' => '+48 61 812 34 56',
                'www'   => 'https://www.bejo.pl',
                'email' => 'poland@bejo.com',
            ],
            [
                'name'  => 'Rijk Zwaan Polska',
                'nip'   => '1130002468',
                'phone' => '+48 22 757 55 55',
                'www'   => 'https://www.rijkzwaan.pl',
                'email' => 'info@rijkzwaan.pl',
            ],
        ];

        foreach ($producers as $producer) {
            Producer::updateOrCreate(
                ['nip' => $producer['nip']], // unikalny identyfikator
                $producer
            );
        }
    }
}
