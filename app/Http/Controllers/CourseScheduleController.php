<?php
//CourseScheduleController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseSchedule;

class CourseScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CourseSchedule::all();

        return response()->json([
            'message'=> 'CourseSchedule retrieved successfully!!!',
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
        'course_code' => 'required|exists:courses,course_code',
        'schedule_date' => 'required|date',
        'start_time' => 'required|date_format:H:i:s',
        'end_time' => 'required|date_format:H:i:s',
        'location' => 'required|string|max:50',
    ]);

    CourseSchedule::create($validated);

    return response()->json(['message' => 'CourseSchedule created successfully'], 201);
}


    /**
     * Display the specified resource.
     */
    public function show(CourseSchedule $CourseSchedule)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseSchedule $CourseSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseSchedule $CourseSchedule)
    {
        $validated = $request->validate([
            'course_code' => 'required|exists:courses,course_code',
            'schedule_date' => 'required|date',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s',
            'location' => 'required|string|max:50',
        ]);
    
        // Update the student's attributes
        $CourseSchedule->update($validated);
    
        // Return a success response
        return response()->json(['message' => 'CourseSchedule updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseSchedule $CourseSchedule)
    {
        $CourseSchedule->delete();
    
        return response()->json(['message' => 'CourseSchedule deleted successfully'], 200);
    }
}