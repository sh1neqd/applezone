<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => ucfirst($this->faker->words(2, true)),
            'category_id' => Category::query()->InRandomOrder()->value('id'),
            'price' => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
