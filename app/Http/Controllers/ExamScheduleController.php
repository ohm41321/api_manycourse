<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamSchedule;

class ExamScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ExamSchedule::all();

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
    public function store(Request $request, ExamSchedule $ExamSchedule)
{
    $validated = $request->validate([
        'course_code' => 'required|exists:courses,course_code',
        'exam_date' => 'required|date',
        'exam_time' => 'required|date_format:H:i:s',
        'exam_location' => 'required|string|max:50',
        'exam_duration' => 'required|int|max:300',
    ]);

    // Create a new ExamSchedule instance with the validated data
    $newExamSchedule = $ExamSchedule->create($validated);

    // Return a success response with the newly created ExamSchedule data
    return response()->json(['message' => 'ExamSchedule created successfully', 'data' => $newExamSchedule], 201);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExamSchedule $ExamSchedule)
    {
        $validated = $request->validate([
            'course_code' => 'required|exists:courses,course_code',
            'exam_date' => 'required|date',
            'exam_time' => 'required|date_format:H:i:s',
            'exam_location' => 'required|string|max:50',
            'exam_duration' => 'required|int|max:300',
    
        ]);
    
        // Update the student's attributes
        $newExamSchedule = $ExamSchedule->update($validated);
    
        // Return a success response
        return response()->json(['message' => 'ExamSchedule updated successfully', 'data' => $newExamSchedule], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamSchedule $ExamSchedule)
    {
        $ExamSchedule->delete();
    
        return response()->json(['message' => 'ExamSchedule deleted successfully'], 200);
    }
}
