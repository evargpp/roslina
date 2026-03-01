<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Seed;
use App\Models\Unit;
use App\Models\Producer;
use App\Models\User;
use App\Models\Crop;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seed>
 */
class SeedFactory extends Factory
{
    protected $model = Seed::class;

    public function definition(): array
    {
        // losujemy jednostkę i producenta z bazy lub tworzymy nowy
        $unit = Unit::inRandomOrder()->first() ?? Unit::factory()->create();
        $producer = Producer::inRandomOrder()->first() ?? Producer::factory()->create();
        $user = User::inRandomOrder()->first() ?? User::factory()->create();
        $crop = Crop::inRandomOrder()->first() ?? Crop::factory()->create();

        $quantity = $this->faker->numberBetween(1, 1000);

        return [
            'name'        => $this->faker->word() . ' seeds',
            'desc'        => $this->faker->sentence(),
            'quantity'    => $quantity,
            'unit_id'     => $unit->id,
            'producer_id' => $producer->id,
            'acquired_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'expires_at'  => $this->faker->dateTimeBetween('now', '+2 years'),
            'user_id'     => $user->id,
            'crop_id'     => $crop->id,
        ];
    }
}
