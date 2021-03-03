<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $faker->name ,
            'description' => $faker->sentence,
            'body' => $faker->paragraph(5,true),
            'price' => $faker->randomFloat(2,10),
            'slug' => $faker->slug
        ];
    }
}
