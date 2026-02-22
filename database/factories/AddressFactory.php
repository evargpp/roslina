<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Address;
use App\Models\Producer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'street'      => $this->faker->streetAddress(),
            'city'        => $this->faker->city(),
            'postal_code'    => $this->faker->postcode(),
            'country'     => $this->faker->country(),
        ];
    }
}
