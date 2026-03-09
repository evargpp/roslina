<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        $user = User::inRandomOrder()->first() ?? User::factory()->create();
        return [
            'path' => 'images/' . $this->faker->image('storage/app/public/images', 640, 480, null, true),
            'user_id' => $user->id,
            // 'imageable_type' i 'imageable_id' ustawimy dynamicznie w seeder/factory helper
        ];
    }

    /**
     * Przypisanie obrazu do modelu polimorficznego
     */
    public function forModel($model)
    {
        return $this->state(function (array $attributes) use ($model) {
            return [
                'imageable_id' => $model->id,
                'imageable_type' => get_class($model),
            ];
        });
    }
}
