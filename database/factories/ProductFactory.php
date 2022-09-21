<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {   
        return [
            'name'=>$this->faker->word(),
            'description'=>$this->faker->text(),
            'tax'=>$this->faker->numberBetween(0, 100),
            'cost'=>$this->faker->numberBetween(0, 10000),
            'stock'=>$this->faker->numberBetween(0, 10000),
            'image'=>$this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
