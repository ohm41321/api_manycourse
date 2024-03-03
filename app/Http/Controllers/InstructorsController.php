<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructors;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Instructors::all();

        return response()->json([
            'message'=> 'Categories retrieved successfully!!!',
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
            'instructors_code' => 'required|string|max:4',
            'first_name' => 'required|string|max:4',
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'gender' => 'required|string|max:1',
            'categories_id' => 'required|exists:categories,categories_id',

        ]);
 
        Instructors::create($validated);
 
        return response()->json(['message' => 'Instructor created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructors $instructors)
    {
        return response()->json([
            'message' => 'Instructor retrieved successfully!!',
            'retrieved by' => 'Athit',
            'data' => $instructors
        ], 200);
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
    public function update(Request $request, $instructorsCode)
{
    $validated = $request->validate([
        'first_name' => 'required|string|max:20',
        'last_name' => 'required|string|max:20',
        'gender' => 'required|string|max:1',
        'categories_id' => 'required|exists:categories,categories_id',
    ]);

    $instructor = Instructors::where('instructors_code', $instructorsCode)->first();

    if (!$instructor) {
        return response()->json(['error' => 'Instructor not found'], 404);
    }

    $instructor->update($validated);

    return response()->json(['message' => 'Instructor updated successfully'], 200);
}

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($instructorsCode)
    {
        // Find the instructor by instructors_code
        $instructor = Instructors::where('instructors_code', $instructorsCode)->first();
    
        if (!$instructor) {
            return response()->json(['error' => 'Instructor not found'], 404);
        }
    
        $instructor->delete();
    
        return response()->json(['message' => 'Instructor deleted successfully'], 200);
    }
    
    
}
