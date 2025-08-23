<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PopLocationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'        => 'POP ' . $this->faker->city(),
            'description' => $this->faker->sentence(),
            'country'     => $this->faker->country(),
            'state'       => $this->faker->state(),
            'city'        => $this->faker->city(),
            'address'     => $this->faker->address(),
            'latitude'    => $this->faker->randomFloat(7, -90, 90),
            'longitude'   => $this->faker->randomFloat(7, -180, 180),
        ];
    }
}
