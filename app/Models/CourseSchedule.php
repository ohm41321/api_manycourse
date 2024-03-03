<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSchedule extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_schedule_id';

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_code');
    }

    protected $fillable = [
        'course_code',
        'schedule_date',
        'start_time',
        'end_time',
        'location',
    ];
}
