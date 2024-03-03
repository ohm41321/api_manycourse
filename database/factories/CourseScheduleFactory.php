<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseSchedule>
 */
class CourseScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courseCodes = Course::pluck('course_code')->toArray();
        $courseCode = fake()->randomElement($courseCodes);

        return [
            'course_code' => $courseCode,
            'schedule_date' => fake()->date(),
            'start_time' => fake()->time(),
            'end_time' => fake()->time(),
            'location' => fake()->address(),
        ];
    }
}
