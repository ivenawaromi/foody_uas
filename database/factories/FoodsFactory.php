<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Foods;
use App\Models\Categories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Foods>
 */
class FoodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($this->faker));

        return [
            'nameFood' => $this->faker->foodName(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'categorie_id' => Categories::factory(),
        ];
    }
}
