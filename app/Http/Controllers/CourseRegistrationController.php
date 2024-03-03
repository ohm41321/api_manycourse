<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseRegistration;
use App\Models\Course;

class CourseRegistrationController extends Controller
{

    public function list()
    {
        $perPage = 10; 
        $list = CourseRegistration::paginate($perPage); 

        return view('manycourse.register_list')->with('list', $list);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CourseRegistration::all();

        return response()->json([
            'message'=> 'ExamSchedule retrieved successfully!!!',
            'retrieved by' => 'Athit',
            'data'=> $data
        ], 200);
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'course_code' => 'required|string|max:6',
            // Add more validation rules as needed
        ]);
    
        // Create a new Course instance with the validated data
        $course = new CourseRegistration();
        $course->user_id = auth()->id(); // Assign the authenticated user's ID
        $course->first_name = $validated['first_name'];
        $course->last_name = $validated['last_name'];
        $course->email = $validated['email'];
        $course->phone = $validated['phone'];
        $course->course_code = $validated['course_code'];
        // Set other properties as needed
    
        // Save the course to the database
        $course->save();
    
        return redirect()->route('register-form')->with('success', 'Welcome to Many Course! Thank you for registering.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($registration_id)
    {
        // Retrieve the registration record
        $registration = CourseRegistration::findOrFail($registration_id);
        
        // Check if the currently authenticated user is authorized to edit this registration
        if ($registration->user_id !== auth()->user()->id) {
            return redirect()->back()->with('error', 'You are not authorized to edit this registration.');
        }
    
        // Retrieve all courses
        $courses = Course::all(); // Assuming Course is the model for your courses table
    
        return view('manycourse.edit_registration', compact('registration', 'courses'));
    }
    



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $registration_id)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            // Add validation rules for other fields as needed
        ]);
    
        // Find the student registration record based on the provided ID
        $registration = CourseRegistration::findOrFail($registration_id);
    
        // Update the student's information
        $registration->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'course_code' => $request->input('course_code'),
            // Update other fields as needed
        ]);
    
        // Redirect back to the list page or wherever you want
        return redirect()->route('register-list')->with('success', 'Student information updated successfully.');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Find the course registration record based on the provided ID
    $courseRegistration = CourseRegistration::findOrFail($id);
    
    // Check if the currently authenticated user is authorized to delete this registration
    if ($courseRegistration->user_id !== auth()->user()->id) {
        return redirect()->back()->with('error', 'You are not authorized to delete this registration.');
    }

    // Delete the registration
    $courseRegistration->delete();

    return redirect()->back()->with('success', 'Record deleted successfully.');
}
    
}
