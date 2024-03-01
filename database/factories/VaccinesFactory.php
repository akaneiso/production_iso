<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Child;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VaccinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => $this->faker->name,
        'child_id' => $this->faker->child()->id,
        'type' => $this->faker->randomNumber(1),
        'startdate'=> $this->faker->randomNumber(1),
        'enddate'=> $this->faker->randomNumber(2)
        ];
    }
}
