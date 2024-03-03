<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSchedule extends Model
{
    use HasFactory;
    protected $table = 'exam_schedule';

    protected $primaryKey = 'exam_schedule_id';

    protected $fillable = [
        'course_code', 'exam_date', 'exam_time', 'exam_location', 'exam_duration',
    ];

    // Define the relationship with the Course model
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_code');
    }
}
