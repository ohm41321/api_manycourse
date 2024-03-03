<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    use HasFactory;

    protected $table = 'course_registration';

    protected $primaryKey = 'registration_id';

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_code');
    }

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'course_code', 'registration_date',
    ];
}
