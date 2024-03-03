<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Instructors;
use App\Models\CourseSchedule;
use App\Models\ExamSchedule;
use App\Models\CourseRegistration;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       Instructors::factory(10)->create();
       Course::factory(10)->create();
       CourseSchedule::factory(5)->create();
       ExamSchedule::factory(5)->create();
       CourseRegistration::factory(10)->create();


    }
}
