<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'price' => $this->faker->numberBetween(),
            'description' => $this->faker->paragraph(),
            'slug' => Str::slug($name),
            'categories_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
