<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Instructors;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'categories_id';

    public function courses()
    {
        return $this->hasMany(Course::class, 'categories_id');
    }

    public function instructors()
    {
        return $this->hasMany(Instructors::class, 'categories_id');
    }

    protected $fillable = [
        'categories_id',
        'categories_name',
    ];
}
