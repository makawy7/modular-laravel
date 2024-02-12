<?php

namespace Modules\Product\Database\Factories;

use Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'price' => random_int(100, 10000),
            'stock' => random_int(1, 10)
        ];
    }
}
