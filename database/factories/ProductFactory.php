<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'details' => $this->faker->sentence(10),
            'stock' => $this->faker->numberBetween(1,200),
            'discount' =>  $this->faker->numberBetween(1,20),
            'price' => $this->faker->numberBetween(100,2820),
        ];
    }
}
