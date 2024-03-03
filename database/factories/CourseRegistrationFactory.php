<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseRegistration>
 */
class CourseRegistrationFactory extends Factory
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

        $userId = User::count() > 0 ? User::inRandomOrder()->first()->id : null;

        return [
            'user_id' => $userId,
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'email' => fake()->unique()->safeEmail,
            'phone' => fake()->phoneNumber,
            'course_code' => $courseCode,
            'registration_date' => fake()->date(),
        ];

    }
}
