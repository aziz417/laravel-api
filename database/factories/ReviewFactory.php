<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Review::class;
    public function definition()
    {
//        $product = Product::first()->random();
        return [
            'customer' => $this->faker->name,
            'review' => $this->faker->numberBetween(1,5),
            'product_id' => $this->faker->numberBetween(1,2000),
            'comment' => $this->faker->sentence(10),
        ];
    }
}
