<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Producer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producer>
 */
class ProducerFactory extends Factory
{
    protected $model = Producer::class;

    public function definition(): array
    {
        return [
            'name'  => $this->faker->company(),
            'nip'   => $this->generateNip(),
            'phone' => $this->faker->phoneNumber(),
            'www'   => $this->faker->url(),
            'email' => $this->faker->unique()->companyEmail(),
        ];
    }

    private function generateNip(): string
    {
        // generuje 10-cyfrowy NIP (bez walidacji checksum)
        return (string) $this->faker->unique()->numberBetween(1000000000, 9999999999);
    }
}
