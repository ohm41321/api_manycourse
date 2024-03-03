<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();

        return response()->json([
            'message'=> 'Categories retrieved successfully!!!',
            'retrieved by' => 'Athit',
            'data'=> $data
        ], 200);
    }

    public function category_api()
    {
        return Category::all();
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
            'categories_id' => 'required|int|max:10',
            'categories_name' => 'required|string|max:50',
        ]);
 
        Category::create($validated);
 
        return response()->json(['message' => 'Category created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json([
            'message' => 'Category retrieved successfully!!',
            'retrieved by' => 'Athit',
            'data' => $category
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'categories_name' => 'required|string|max:50',
    
        ]);
    
        // Update the student's attributes
        $category->update($validated);
    
        // Return a success response
        return response()->json(['message' => 'Category updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
    
        return response()->json(['message' => 'Category deleted successfully'], 200);
    }
}
