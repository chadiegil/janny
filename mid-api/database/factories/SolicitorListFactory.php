<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SolicitorList>
 */
class SolicitorListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName,
            'address'=>$this->faker->streetAddress,
            'amount'=>$this->faker->randomFloat(2,100,2500),
            'message'=>$this->faker->sentence
        ];
    }
}
