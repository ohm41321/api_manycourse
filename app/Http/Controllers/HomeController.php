<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Course;
use App\Models\Category;
use App\Models\CourseSchedule;
use App\Models\ExamSchedule;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $data = Course::all();
    //     $cat = Category::all();
        
    //     return view('manycourse.home')->with('data', $data)->with('cat', $cat);
    // }
    public function index()
    {
        $data = Course::all();
        $cat = Category::all();
        $course_sh = CourseSchedule::all();
        $data_sh = Course::pluck('course_name', 'course_code');
        $exam_data = ExamSchedule::all();
        $exam_course = Course::pluck('course_name', 'course_code');
        return view('manycourse.customer')->with('data', $data)->with('cat', $cat)
                ->with('course_sh', $course_sh)->with('data_sh', $data_sh)->with('exam_data', $exam_data)->with('exam_course', $exam_course);

    }
    public function dev()
    {
       return view('manycourse.dev');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
