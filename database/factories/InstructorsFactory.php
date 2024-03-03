<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Instructors;

class InstructorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'instructors_code' => $this->faker->unique()->regexify('[1-9]{4}'),
            'first_name' => $this->faker->firstName('th-TH'),
            'last_name' => $this->faker->lastName('th-TH'),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'categories_id' => $this->faker->randomElement([1, 2, 3, 4, 5]),
        ];
    }
}
