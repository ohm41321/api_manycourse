<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Instructors;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $instructorCodes = Instructors::pluck('instructors_code')->toArray();

        // Check if $instructorCodes is empty
        if (empty($instructorCodes)) {
            // Throw an exception or handle the situation as needed
            throw new \Exception("No instructor codes available. Make sure to seed the Instructors table first.");
        }

        // Select a random instructor code
        $instructorCode = $this->faker->randomElement($instructorCodes);

        return [
            'course_code' => $this->faker->unique()->regexify('[1-9]{6}'),
            'course_name' => $this->faker->word,
            'descriptions' => $this->faker->text,
            'categories_id' => $this->faker->randomElement([1, 2, 3, 4, 5]), // Adjust as needed
            'instructors_code' => $instructorCode,
        ];
    }
}

