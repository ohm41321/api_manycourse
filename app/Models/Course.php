<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Instructors;
use App\Models\CourseRegistration;

class Course extends Model
{
    use HasFactory;

    public function create()
    {
        $courseCodes = Course::pluck('course_code', 'id');
        return view('manycourse.register_course')->with('courseCodes', $courseCodes);
    }

    protected $primaryKey = 'course_code';

// belongTo

    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function instructor()
{
    return $this->belongsTo(Instructors::class, 'instructors_code');
}

// hasMany

    public function courses_schedule()
    {
        return $this->hasMany(CourseSchedule::class, 'course_code');
    }

    public function examSchedules()
    {
        return $this->hasMany(ExamSchedule::class, 'course_code');
    }

    public function course_registration()
    {
        return $this->hasMany(CourseRegistration::class, 'course_code');
    }

    protected $fillable = [
        'course_code',
        'course_name',
        'categories_id',
    ];
}
