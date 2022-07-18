<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\photos_category>
 */
class photos_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(mt_rand(1,2)),
            'slug'=>$this->faker->slug(),
            'description'=>$this->faker->text(mt_rand(10,50)),
            'created_at'=>$this->faker->dateTimeBetween('-1 month','+1 month'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 month','+1 month'),

        ];
    }
}
