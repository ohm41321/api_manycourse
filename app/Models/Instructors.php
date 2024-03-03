<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Category;

class Instructors extends Model
{
    use HasFactory;

    protected $primaryKey = 'instructors_code';

    public function courses()
    {
        return $this->hasMany(Course::class, 'instructors_code');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }


    protected $fillable = [
        'instructors_code',
        'first_name',
        'last_name',
        'gender',
        'categories_id'
    ];
}

