<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructors;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function course()
    {
        $data = Course::all();
        $cat = Category::all();

        return view('components.manycourse.catagories')->with('data', $data)->with('cat', $cat);
    }
    //subject
    public function drawing()
    {
        $course = Course::all();
        $cat = Category::all();
        $instructor = Instructors::pluck('first_name', 'instructors_code');

        return view('manycourse.course.draw_course')->with('course', $course)->with('cat', $cat)->with('instructor', $instructor);
    }
    public function science()
    {
        $course = Course::all();
        $cat = Category::all();
        $instructor = Instructors::all()->pluck('first_name',  'instructors_code');

        return view('manycourse.course.science_course')->with('course', $course)->with('cat', $cat)->with('instructor', $instructor);
    }
    public function math()
    {
        $course = Course::all();
        $cat = Category::all();
        $instructor = Instructors::all()->pluck('first_name',  'instructors_code');

        return view('manycourse.course.math_course')->with('course', $course)->with('cat', $cat)->with('instructor', $instructor);
    }
    public function language()
    {
        $course = Course::all();
        $cat = Category::all();
        $instructor = Instructors::all()->pluck('first_name',  'instructors_code');

        return view('manycourse.course.language_course')->with('course', $course)->with('cat', $cat)->with('instructor', $instructor);
    }
    public function sports()
    {
        $course = Course::all();
        $cat = Category::all();
        $instructor = Instructors::all()->pluck('first_name',  'instructors_code');

        return view('manycourse.course.sports_course')->with('course', $course)->with('cat', $cat)->with('instructor', $instructor);
    }
    public function register()
    {
        $courseCodes = Course::pluck('course_name', 'course_code');
        return view('manycourse.register_form')->with('courseCodes', $courseCodes);
    }
   
    

    //
    public function course_api()
    {
       return  Course::all();
    }

    

    public function index()
    {
        $data = Course::with('categories')->get();

        //return $students;

            return response()->json(
            ['message'=> 'Students get successfully!!!',
            'get data by' => 'Athit',
            'data'=> $data],200);
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
        
        $validated = $request->validate([
            'course_code' => 'required|string|max:6',
            'course_name' => 'required|string|max:50',
            'categories_id' => 'required|exists:categories,categories_id',
        ]);
        
 
        Course::create($validated);
 
        return response()->json(['message' => 'Course created successfully'], 201);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return response()->json(
            [
                'message' => 'Student get successfully!!',
                'get Data by' => 'Athit',
                'data' => $course
            ],
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'course_name' => 'required|string|max:50',
            'categories_id' => 'required|exists:categories,categories_id',
    
        ]);
    
        // Update the student's attributes
        $course->update($validated);
    
        // Return a success response
        return response()->json(['message' => 'Course updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
    
        return response()->json(['message' => 'Course deleted successfully'], 200);
    }
}
