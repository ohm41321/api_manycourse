<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExamSchedule>
 */
class ExamScheduleFactory extends Factory
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
            'exam_date' => fake()->date(),
            'exam_time' => fake()->time(),
            'exam_location' => fake()->city,
            'exam_duration' => fake()->numberBetween(60, 240), 
        ];
    }
}
