<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(mt_rand(1,2)),
            'slug'=>$this->faker->slug(),
            'category_id'=>mt_rand(1,2),
            'user_id'=>mt_rand(1,2),
            'hit'=>0,
            'image'=>'assets/landingpage/themes/images/resource/products/'.mt_rand(1,17).'.jpg',
            'content'=>$this->faker->text(mt_rand(10,50)),
            'created_at'=>$this->faker->dateTimeBetween('-1 month','+1 month'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 month','+1 month'),

        ];
    }
}
